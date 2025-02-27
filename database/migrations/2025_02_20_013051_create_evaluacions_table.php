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

            $table->string('llamada_id', 50)->index()->nullable();
            $table->string('mujer_telefono', 20)->index()->nullable();
            $table->bigInteger('mujer_identificacion')->nullable();
            $table->string('mujer_nombre')->nullable();

            $table->text('observaciones')->nullable();
            $table->text('aspectos_positivos')->nullable();
            $table->text('aspectos_a_mejorar')->nullable();
            $table->text('comentarios')->nullable();
            $table->text('observacion_final')->nullable();
            $table->text('compromisos')->nullable();

            $table->dateTime('fecha_registro');
            $table->foreignId('agente_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('usuario_registro_id')->nullable()->constrained('users')->nullOnDelete();
            
            $table->foreignId('matriz_id')->constrained('matrizs')->onDelete('cascade');
            $table->foreignId('tipo_monitoreo_id')->constrained('tipo_monitoreos')->onDelete('cascade');
            $table->foreignId('estado_evaluacion_id')->constrained('estado_evaluacions')->onDelete('cascade');
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
