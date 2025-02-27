<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Los comandos Artisan que se registran.
     *
     * @var array
     */
    protected $commands = [
        // Registra tus comandos personalizados aquí, por ejemplo:
        // \App\Console\Commands\BorrarAdjuntosCommand::class,
    ];

    /**
     * Define el cronograma de comandos Artisan.
     */
    protected function schedule(Schedule $schedule)
    {
        // Ejecuta el comando todos los domingos
        $schedule->command('adjuntos:borrar')->wednesdays()->at('23:30');
    }

    /**
     * Registra los comandos de la aplicación.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
