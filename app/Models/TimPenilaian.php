<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimPenilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'tahun_akademik',
        'semester',
        'rangkap_peran',
        'program_studi_institusi',
        'tanggal_partisipasi',
        'satuan_hasil_kegiatan',
        'jumlah_volume_kegiatan',
        'angka_kredit_kegiatan',
        'nomor_sk_kegiatan',
        'lampiran_sk_kegiatan'
    ];
}
