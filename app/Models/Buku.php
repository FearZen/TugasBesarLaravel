<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'jenis_buku',
        'judul_buku',
        'jumlah_buku',
        'tanggal_terbit',
        'satuan_hasil_kegiatan',
        'jumlah_volume_kegiatan',
        'angka_kredit_kegiatan',
        'nomor_sk_kegiatan',
        'lampiran_sk_kegiatan'
    ];
}
