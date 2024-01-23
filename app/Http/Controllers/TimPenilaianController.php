<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimPenilaian;

class TimPenilaianController extends Controller
{
    //
    public function submitTimPenilaian(Request $request)
    {
        $request->validate([
            'tahun_akademik' => 'required',
            'semester' => 'required',
            'rangkap_peran' => 'required',
            'program_studi_institusi' => 'required',
            'tanggal_partisipasi' => 'required',
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

        $timPenilaian = new TimPenilaian;
        $timPenilaian->id_user = $userId;
        $timPenilaian->tahun_akademik = $request->tahun_akademik;
        $timPenilaian->semester = $request->semester;
        $timPenilaian->rangkap_peran = $request->rangkap_peran;
        $timPenilaian->program_studi_institusi = $request->program_studi_institusi;
        $timPenilaian->tanggal_partisipasi = $request->tanggal_partisipasi;
        $timPenilaian->satuan_hasil_kegiatan = $request->satuan_hasil_kegiatan; 
        $timPenilaian->jumlah_volume_kegiatan = $request->jumlah_volume_kegiatan;
        $timPenilaian->angka_kredit_kegiatan = $request->angka_kredit_kegiatan;
        $timPenilaian->nomor_sk_kegiatan = $request->nomor_sk_kegiatan;
        $timPenilaian->lampiran_sk_kegiatan = $fileName;
        $timPenilaian->save();

        return redirect()->intended('/dashboard');
    }
}
