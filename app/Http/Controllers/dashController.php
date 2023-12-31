<?php

// Letakkan file ini di direktori 'app/Http/Controllers'

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard.biodata');
    }

    public function dataSaya()
    {
        // Logika dan pengolahan data untuk rute /data-saya
        return view('dashboard.data_saya');
    }
}

