<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function approval()
    {
        return view('pengajuan.approval');
    }

    public function list()
    {
        return view('pengajuan.list');
    }
}
