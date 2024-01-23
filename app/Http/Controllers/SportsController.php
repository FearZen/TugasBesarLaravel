<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSportsRequest;
use App\Http\Requests\UpdateSportsRequest;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    public function submitSport(Request $request)
    {
        $request->validate([
            'bidang_prestasi' => 'required',
            'tingkat_prestasi' => 'required',
            'prestasi_yang_dicapai' => 'required',
            'tanggal_pencapaian' => 'required',
            'satuan_hasil_kegiatan' => 'required',
            'jumlah_volume_kegiatan' => 'required',
            'angka_kredit_kegiatan' => 'required',
            'nomor_sk_kegiatan' => 'required',
            'file_upload' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $userId = auth()->id();

        $file = $request->file('file_upload');
        $fileName = time() . '_' . uniqid() . '.buku.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $fileName, 'public');

        $sport = new Sport;
        $sport->id_user = $userId;
        $sport->bidang_prestasi = $request->bidang_prestasi;
        $sport->tingkat_prestasi = $request->tingkat_prestasi;
        $sport->prestasi_yang_dicapai = $request->prestasi_yang_dicapai;
        $sport->tanggal_pencapaian = $request->tanggal_pencapaian;
        $sport->satuan_hasil_kegiatan = $request->satuan_hasil_kegiatan;
        $sport->jumlah_volume_kegiatan = $request->jumlah_volume_kegiatan;
        $sport->angka_kredit_kegiatan = $request->angka_kredit_kegiatan;
        $sport->nomor_sk_kegiatan = $request->nomor_sk_kegiatan;
        $sport->lampiran_sk_kegiatan = $fileName;
        $sport->save();
        
        return redirect()->intended('/dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSportsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sports $sports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sports $sports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSportsRequest $request, Sports $sports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sports $sports)
    {
        //
    }
}
