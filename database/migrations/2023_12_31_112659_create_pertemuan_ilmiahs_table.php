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
        Schema::create('pertemuan_ilmiahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('jenis_kegiatan');
            $table->string('tingkat_kegiatan');
            $table->string('nama_kegiatan');
            $table->string('peran');
            $table->string('keterangan_kegiatan');
            $table->string('tanggal_kegiatan');
            $table->integer('satuan_hasil_kegiatan');
            $table->integer('jumlah_volume_kegiatan');
            $table->integer('angka_kredit_kegiatan');
            $table->string('nomor_sk_kegiatan');
            $table->string('lampiran_sk_kegiatan')->default('not provided');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuan_ilmiahs');
    }
};
