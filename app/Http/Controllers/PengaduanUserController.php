<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanUserController extends Controller
{
    public function create()
    {
        return view('user.pengaduan.create');
    }
}
