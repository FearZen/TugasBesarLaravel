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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('bidang_prestasi');
            $table->string('tingkat_prestasi');
            $table->string('prestasi_yang_dicapai');
            $table->string('tanggal_pencapaian');
            $table->integer('satuan_hasil_kegiatan');
            $table->integer('jumlah_volume_kegiatan');
            $table->integer('angka_kredit_kegiatan');
            $table->string('nomor_sk_kegiatan');
            $table->string('lampiran_sk_kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
