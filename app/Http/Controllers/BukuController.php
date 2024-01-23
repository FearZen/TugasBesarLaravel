<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function submitBuku(Request $request)
    {
        $request->validate([
            'jenis_buku'=>'required',
            'judul_buku'=>'required',
            'jumlah_buku'=>'required',
            'tanggal_terbit'=>'required',
            'satuan_hasil_kegiatan'=>'required',
            'jumlah_volume_kegiatan'=>'required',
            'angka_kredit_kegiatan'=>'required',
            'nomor_sk_kegiatan'=>'required',
            'file_upload' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $userId = auth()->id();

        $file = $request->file('file_upload');
        $fileName = time() . '_' . uniqid() . '.buku.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $fileName, 'public');

        $buku = new Buku;
        $buku->id_user = $userId;
        $buku->jenis_buku = $request->jenis_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->satuan_hasil_kegiatan = $request->satuan_hasil_kegiatan;
        $buku->jumlah_volume_kegiatan = $request->jumlah_volume_kegiatan;
        $buku->angka_kredit_kegiatan = $request->angka_kredit_kegiatan;
        $buku->nomor_sk_kegiatan = $request->nomor_sk_kegiatan;
        $buku->lampiran_sk_kegiatan = $fileName;
        
        $buku->save();

        return redirect()->intended('/dashboard');
    }
}
