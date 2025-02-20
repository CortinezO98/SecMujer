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
        Schema::create('evaluacion_sub_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluacion_id')->nullable()->constrained('evaluacions')->nullOnDelete();
            $table->foreignId('sub_item_id')->nullable()->constrained('sub_items')->nullOnDelete();
            $table->boolean('cumple')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_sub_items');
    }
};
