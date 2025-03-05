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
        Schema::create('adjuntos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_archivo');
            $table->string('ruta');
            $table->string('tipo')->nullable();
            $table->unsignedBigInteger('peso')->nullable();
            $table->boolean('eliminado')->default(0);
            $table->date('fecha_borrado')->index();
            $table->foreignId('evaluacion_id')->constrained('evaluacions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adjuntos');
    }
};
