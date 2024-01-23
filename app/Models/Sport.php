<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_user',
        'bidang_prestasi',
        'tingkat_prestasi',
        'prestasi_yang_dicapai',
        'tanggal_pencapaian',
        'satuan_hasil_kegiatan',
        'jumlah_volume_kegiatan',
        'angka_kredit_kegiatan',
        'nomor_sk_kegiatan',
        'lampiran_sk_kegiatan'
    ];
}
