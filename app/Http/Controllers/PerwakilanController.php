<?php

namespace App\Http\Controllers;

use App\Models\Perwakilan;
use Illuminate\Http\Request;

class PerwakilanController extends Controller
{
    public function submitPerwakilan(Request $request)
    {
        $userId = auth()->id();

        $request->validate
        ([
            'jenis_perwakilan' => 'required',
            'peran' => 'required', 
            'tahun_kepanitiaan' => 'required',
            'tanggal_kepanitiaan' => 'required',
            'keterangan_kegiatan' => 'required',
            'satuan_hasil_kegiatan' => 'required',
            'jumlah_volume_kegiatan' => 'required',
            'angka_kredit_kegiatan' => 'required',
            'nomor_sk_kegiatan' => 'required',
            'file_upload' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('file_upload');
        $fileName = time() . '_' . uniqid() . '_' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $fileName, 'public');

        // insert requesst into database
        $perwakilan = new Perwakilan;
        $perwakilan->id_user = $userId;
        $perwakilan->jenis_perwakilan = $request->jenis_perwakilan;
        $perwakilan->peran = $request->peran;
        $perwakilan->tahun_kepanitiaan = $request->tahun_kepanitiaan;
        $perwakilan->tanggal_kepanitiaan = $request->tanggal_kepanitiaan;
        $perwakilan->keterangan_kegiatan = $request->keterangan_kegiatan;
        $perwakilan->satuan_hasil_kegiatan = $request->satuan_hasil_kegiatan;
        $perwakilan->jumlah_volume_kegiatan = $request->jumlah_volume_kegiatan;
        $perwakilan->angka_kredit_kegiatan = $request->angka_kredit_kegiatan;
        $perwakilan->nomor_sk_kegiatan = $request->nomor_sk_kegiatan;
        $perwakilan->lampiran_sk_kegiatan = $fileName;
        $perwakilan->save();

        return redirect()->intended('/dashboard');
    }
}