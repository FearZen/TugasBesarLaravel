<?php

<<<<<<< HEAD

=======
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
// Letakkan file ini di direktori 'app/Http/Controllers'

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Biodata;

use App\Models\Buku;
use App\Models\Perwakilan;
use App\Models\Penghargaan;
use App\Models\PertemuanIlmiah;
use App\Models\Sport;
use App\Models\TimPenilaian;
=======
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f

class dashController extends Controller
{
    public function perwakilan()
    {
        // Logika dan pengolahan data untuk rute /perwakilan
        return view('dashboard.perwakilan');
    }

    public function pertemuanIlmiah()
    {
        // Logika dan pengolahan data untuk rute /pertemuan-ilmiah
        return view('dashboard.pertemuan_ilmiah');
    }

    public function penghargaanTandaJasa()
    {
        // Logika dan pengolahan data untuk rute /penghargaan-tanda-jasa
        return view('dashboard.penghargaan_tanda_jasa');
    }

    public function bukuPelajaran()
    {
        // Logika dan pengolahan data untuk rute /buku-pelajaran
        return view('dashboard.buku_pelajaran');
    }

    public function olahragaHumainora()
    {
        // Logika dan pengolahan data untuk rute /olahraga-humainora
        return view('dashboard.olahraga_humainora');
    }

    public function timPenilaian()
    {
        // Logika dan pengolahan data untuk rute /tim-penilaian
        return view('dashboard.tim_penilaian');
    }

    public function biodata()
    {
        // Logika dan pengolahan data untuk rute /biodata
<<<<<<< HEAD
        $userId = auth()->id();
        $biodata = Biodata::where('user_id', $userId)->first();
        return view('dashboard.biodata', [
            'userData' => $biodata
        ]);
=======
        return view('dashboard.biodata');
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
    }

    public function dataSaya()
    {
<<<<<<< HEAD
        $userId = auth()->id();
        
        // Specify the number of items per page
        $perPage = 10;

        // Buku pagination
        $buku = Buku::where('id_user', $userId)->paginate($perPage);

        // Perwakilan pagination
        $perwakilan = Perwakilan::where('id_user', $userId)->paginate($perPage);
        
        // Penghargaan pagination
        $penghargaan = Penghargaan::where('id_user', $userId)->paginate($perPage);
        
        // PertemuanIlmiah pagination
        $pertemuanIlmiah = PertemuanIlmiah::where('id_user', $userId)->paginate($perPage);
        
        // Sport pagination
        $sport = Sport::where('id_user', $userId)->paginate($perPage);

        // TimPenilaian pagination
        $timPenilaian = TimPenilaian::where('id_user', $userId)->paginate($perPage);

        return view('data_saya', [
            'buku' => $buku,
            'perwakilan' => $perwakilan,
            'penghargaan' => $penghargaan,
            'pertemuanIlmiah' => $pertemuanIlmiah,
            'sport' => $sport,
            'timPenilaian' => $timPenilaian
        ]);
    }
}
=======
        // Logika dan pengolahan data untuk rute /data-saya
        return view('dashboard.data_saya');
    }
}

>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
