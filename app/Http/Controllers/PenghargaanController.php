<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    public function submitPenghargaan(Request $request)
    {
        // validasi
        $request->validate([
            'jenis_penghargaan' => 'required',
            'tingkat_penghargaan' => 'required',
            'jumlah_penghargaan' => 'required',
            'keterangan_kegiatan' => 'required',
            'satuan_hasil_kegiatan' => 'required',
            'tanggal_penerimaan' => 'required',
            'jumlah_volume_kegiatan' => 'required',
            'angka_kredit_kegiatan' => 'required',
            'nomor_sk_kegiatan' => 'required',
            'file_upload' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $userId = auth()->id();

        $file = $request->file('file_upload');
        $fileName = time() . '_' . uniqid() . '.penghargaan.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $fileName, 'public');

        $penghargaan = new Penghargaan;
        $penghargaan->id_user = $userId;
        $penghargaan->jenis_penghargaan = $request->jenis_penghargaan;
        $penghargaan->tingkat_penghargaan = $request->tingkat_penghargaan;
        $penghargaan->jumlah_penghargaan = $request->jumlah_penghargaan;
        $penghargaan->keterangan_kegiatan = $request->keterangan_kegiatan;
        $penghargaan->satuan_hasil_kegiatan = $request->satuan_hasil_kegiatan;
        $penghargaan->tanggal_penerimaan = $request->tanggal_penerimaan;
        $penghargaan->jumlah_volume_kegiatan = $request->jumlah_volume_kegiatan;
        $penghargaan->angka_kredit_kegiatan = $request->angka_kredit_kegiatan;
        $penghargaan->nomor_sk_kegiatan = $request->nomor_sk_kegiatan;
        $penghargaan->lampiran_sk_kegiatan = $fileName;
        $penghargaan->save();

        return redirect()->intended('/dashboard');
    }
}