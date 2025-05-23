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
        Schema::create('atributos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->decimal('peso');
            $table->boolean('activo')->default(1);
            $table->foreignId('abreviatura_id')->constrained('abreviaturas')->onDelete('cascade');
            $table->foreignId('matriz_id')->constrained('matrizs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atributos');
    }
};
