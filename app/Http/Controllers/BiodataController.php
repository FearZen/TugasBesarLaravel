<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function submitBiodata(Request $request)
    {
        \Log::info($request->all());
        $userId = auth()->id();

        // Check if the user data already exists
        $biodata = Biodata::where('user_id', $userId)->first();

        // Create a new record if user data doesn't exist
        if (!$biodata) {
            $request->validate([
                'nip' => 'required',
                'pangkat' => 'required',
                'jabatan' => 'required',
                'unit_kerja' => 'required',
                'email_pribadi' => 'required',
                'email_institusi' => 'required',
                'no_telp' => 'required',
                'alamat' => 'required',
                'foto' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $biodata = new Biodata;
            $biodata->user_id = $userId;
        }

        // Update or create the record with form data
        $biodata->nip = $request->nip;
        $biodata->pangkat = $request->pangkat;
        $biodata->jabatan = $request->jabatan;
        $biodata->unit_kerja = $request->unit_kerja;
        $biodata->email_pribadi = $request->email_pribadi;
        $biodata->email_institusi = $request->email_institusi;
        $biodata->no_telp = $request->no_telp;
        $biodata->alamat = $request->alamat;

        // Process file upload
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $fileName = time() . '_' . uniqid() . '.buku.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads', $fileName, 'public');
            $biodata->foto = $fileName;
        }

        \Log::info($biodata);
        // Save the record
        $biodata->save();

        return redirect()->intended('/dashboard');
    }
}
