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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('jenis_buku');
            $table->string('judul_buku');
            $table->integer('jumlah_buku');
            $table->string('tanggal_terbit');
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
        Schema::dropIfExists('bukus');
    }
};
