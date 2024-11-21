<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanUserController extends Controller
{
    public function create()
    {
        return view('user.pengaduan.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        dd($input);

    }

}
