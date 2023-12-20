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
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->unsignedBigInteger('id_validasi');
            $table->unsignedBigInteger('dinas_id');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_validasi')->references('id')->on('status_validasis');
            $table->foreign('dinas_id')->references('id')->on('dinas');
            $table->foreign('id_status')->references('id')->on('status_pengaduans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduans', function (Blueprint $table) {

            $table->dropForeign(['id_validasi']);
            $table->dropForeign(['dinas_id']);
            $table->dropForeign(['id_status']);
            $table->dropColumn(['id_validasi', 'dinas_id', 'id_status']);
        });
    }
};
