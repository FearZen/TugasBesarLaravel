<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertemuanIlmiah extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'jenis_kegiatan',
        'tingkat_kegiatan',
        'nama_kegiatan',
        'peran',
        'keterangan_kegiatan',
        'tanggal_kegiatan',
        'satuan_hasil_kegiatan',
        'jumlah_volume_kegiatan',
        'angka_kredit_kegiatan',
        'nomor_sk_kegiatan',
        'lampiran_sk_kegiatan'
    ];
}
