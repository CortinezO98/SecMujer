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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo', 100)->unique();
            $table->integer('nota_total')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('aspectos_positivos')->nullable();
            $table->text('aspectos_a_mejorar')->nullable();
            $table->text('comentarios')->nullable();
            $table->text('comentarios_refutacion')->nullable();
            $table->text('observacion_final')->nullable();
            $table->text('compromisos')->nullable();
            $table->dateTime('fecha_registro');
            $table->foreignId('agente_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('matriz_id')->nullable()->constrained('matrizs')->nullOnDelete();
            $table->foreignId('tipo_monitoreo_id')->nullable()->constrained('tipo_monitoreos')->nullOnDelete();
            $table->foreignId('estado_evaluacion_id')->nullable()->constrained('estado_evaluacions')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacions');
    }
};
