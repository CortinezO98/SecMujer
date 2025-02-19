<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100)->unique();
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user_roles')->insert([
            ['id' => 1, 'descripcion' => 'Administrador'],
            ['id' => 2, 'descripcion' => 'Supervisor'],
            ['id' => 3, 'descripcion' => 'Agente'],
            ['id' => 4, 'descripcion' => 'Líder'],
            ['id' => 5, 'descripcion' => 'Coordinador'],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
