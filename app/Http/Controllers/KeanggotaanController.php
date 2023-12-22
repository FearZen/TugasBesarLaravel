<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    public function index()
    {
        return view('keanggotaan.index'); // Gantilah 'keanggotaan.index' dengan nama tampilan yang sesuai
    }
}
