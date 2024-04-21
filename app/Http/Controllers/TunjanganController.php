<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    public function buat()
    {
        return view('tunjangan.buat');
    }
    
    public function bukti()
    {
        return view('tunjangan.bukti');
    }

    public function list()
    {
        return view('tunjangan.list');
    }
}
