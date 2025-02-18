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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('roleId')->nullable()->after('email');
            $table->foreign('roleId')->references('id')->on('user_roles')->onDelete('set null');
            $table->integer('cedula')->unique()->after('roleId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['roleId']);
            $table->dropColumn(['roleId', 'cedula']);
        });
    }
};
