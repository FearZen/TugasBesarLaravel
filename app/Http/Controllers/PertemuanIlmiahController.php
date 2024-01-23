<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertemuanIlmiah;

class PertemuanIlmiahController extends Controller
{
    public function submitPertemuanIlmiah(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'jenis_kegiatan' => 'required',
            'tingkat_kegiatan' => 'required',
            'nama_kegiatan' => 'required',
            'peran' => 'required',
            'keterangan_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'satuan_hasil_kegiatan' => 'required',
            'jumlah_volume_kegiatan' => 'required',
            'angka_kredit_kegiatan' => 'required',
            'nomor_sk_kegiatan' => 'required',
            'file_upload' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $userId = auth()->id();
        
        $file = $request->file('file_upload');
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $fileName, 'public');

        // insert request into database
        $pertemuan_ilmiah = new PertemuanIlmiah;
        $pertemuan_ilmiah->id_user = $userId;
        $pertemuan_ilmiah->jenis_kegiatan = $request->jenis_kegiatan;
        $pertemuan_ilmiah->tingkat_kegiatan = $request->tingkat_kegiatan;
        $pertemuan_ilmiah->nama_kegiatan = $request->nama_kegiatan;
        $pertemuan_ilmiah->peran = $request->peran;
        $pertemuan_ilmiah->keterangan_kegiatan = $request->keterangan_kegiatan;
        $pertemuan_ilmiah->tanggal_kegiatan = $request->tanggal_kegiatan;
        $pertemuan_ilmiah->satuan_hasil_kegiatan = $request->satuan_hasil_kegiatan;
        $pertemuan_ilmiah->jumlah_volume_kegiatan = $request->jumlah_volume_kegiatan;
        $pertemuan_ilmiah->angka_kredit_kegiatan = $request->angka_kredit_kegiatan;
        $pertemuan_ilmiah->nomor_sk_kegiatan = $request->nomor_sk_kegiatan;
        $pertemuan_ilmiah->lampiran_sk_kegiatan = $fileName;
        $pertemuan_ilmiah->save();

        // Redirect atau kembalikan response sesuai kebutuhan Anda
        return redirect()->intended('/dashboard');
    }
}
