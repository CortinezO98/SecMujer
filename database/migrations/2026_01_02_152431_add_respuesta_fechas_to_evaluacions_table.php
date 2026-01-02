<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('evaluacions', function (Blueprint $table) {
            $table->timestamp('comentarios_respondido_at')->nullable()->after('comentarios');
            $table->timestamp('compromisos_respondido_at')->nullable()->after('compromisos');
        });
    }

    public function down(): void
    {
        Schema::table('evaluacions', function (Blueprint $table) {
            $table->dropColumn(['comentarios_respondido_at', 'compromisos_respondido_at']);
        });
    }
};
