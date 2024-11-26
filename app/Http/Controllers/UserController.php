<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = Pengaduan::where('id_user', auth()->user()->id)->get()->all();
        return view('user.dashboard-user', compact('data'));
    }

    public function detail($id)
    {
        $data = Pengaduan::find($id);
        return view('user.pengaduan.detail', compact('data'));
    }
}
