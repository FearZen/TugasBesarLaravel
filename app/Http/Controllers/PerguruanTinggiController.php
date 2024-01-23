<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerguruanTinggiController extends Controller
{
    public function index()
    {
        return view('dashboard.perguruanTinggi');
    }
}
