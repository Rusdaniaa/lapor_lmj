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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('foto_video');
            $table->text('isi_tanggapan');
            //$table->foreignId('id_validasi')->constrained('validasi_status');
            //$table->foreignId('id_dinas')->constrained('dinas');
            $table->unsignedBigInteger('pengadu_id');
            $table->foreign('pengadu_id')->references('id')->on('pengadus')->onDelete('cascade');
            $table->enum('status_pengaduans', ['Belum ada tanggapan', 'Sudah ditanggapi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
