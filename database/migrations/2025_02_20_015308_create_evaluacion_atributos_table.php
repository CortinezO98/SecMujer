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
        Schema::create('evaluacion_atributos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluacion_id')->nullable()->constrained('evaluacions')->nullOnDelete();
            $table->foreignId('atributo_id')->nullable()->constrained('atributos')->nullOnDelete();
            $table->integer('nota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_atributos');
    }
};
