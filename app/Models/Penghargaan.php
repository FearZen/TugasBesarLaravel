<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'jenis_penghargaan',
        'tingkat_penghargaan',
        'jumlah_penghargaan',
        'keterangan_kegiatan',
        'satuan_hasil_kegiatan',
        'tanggal_penerimaan',
        'jumlah_volume_kegiatan',
        'angka_kredit_kegiatan',
        'nomor_sk_kegiatan',
        'lampiran_sk_kegiatan',
    ];
}
