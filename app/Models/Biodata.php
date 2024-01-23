<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nip',
        'pangkat',
        'jabatan',
        'unit_kerja',
        'email_pribadi',
        'email_institusi',
        'nomor_telp',
        'alamat',
        'foto'
    ];
}
