<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Adjunto;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BorrarAdjuntosCommand extends Command
{
    /**
     * El nombre y la firma del comando.
     *
     * @var string
     */
    protected $signature = 'adjuntos:borrar';

    /**
     * La descripción del comando.
     *
     * @var string
     */
    protected $description = 'Elimina archivos de adjuntos cuya fecha_borrado es anterior a la fecha actual y actualiza el campo borrado a true';

    /**
     * Ejecuta el comando.
     */
    public function handle()
    {
        $today = Carbon::today();

        $adjuntos = Adjunto::where('fecha_borrado', '<', $today)->where('eliminado', false)->get();

        if ($adjuntos->isEmpty()) {
            $this->info('No hay adjuntos para eliminar.');
            return 0;
        }

        foreach ($adjuntos as $adjunto) {
            if (Storage::disk('public')->exists($adjunto->ruta)) {
                Storage::disk('public')->delete($adjunto->ruta);
                $this->info("Archivo eliminado: {$adjunto->ruta}");
            } else {
                $this->warn("Archivo no encontrado: {$adjunto->ruta}");
            }
            $adjunto->update(['eliminado' => true]);
        }

        $this->info('Proceso de eliminación completado.');
        return 0;
    }
}
