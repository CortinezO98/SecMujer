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
        Schema::create('evaluacion_abreviaturas', function (Blueprint $table) {
            $table->id();
            $table->decimal('nota');
            $table->foreignId('evaluacion_id')->constrained('evaluacions')->onDelete('cascade');
            $table->foreignId('abreviatura_id')->constrained('abreviaturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_abreviaturas');
    }
};
