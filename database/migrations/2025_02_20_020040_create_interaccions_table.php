<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interaccions', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo', 100)->unique();
            $table->integer('numero')->index();
            $table->date('fecha_interaccion')->nullable();
            $table->dateTime('fecha_registro');
            $table->foreignId('evaluacion_id')->nullable()->constrained('evaluacions')->nullOnDelete();
            $table->foreignId('agente_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('usuario_registro_id')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interaccions');
    }
};
