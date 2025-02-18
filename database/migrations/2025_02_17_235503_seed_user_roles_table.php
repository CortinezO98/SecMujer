<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('user_roles')->insert([
            ['nombre' => 'Administrador'],
            ['nombre' => 'Supervisor'],
            ['nombre' => 'Agente'],
            ['nombre' => 'Líder'],
            ['nombre' => 'Coordinador'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('user_roles')->whereIn('nombre', [
            'Administrador', 'Supervisor', 'Agente', 'Líder', 'Coordinador'
        ])->delete();
    }
};
