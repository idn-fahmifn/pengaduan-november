<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Carbon\Carbon;

class PengaduanUserController extends Controller
{
    public function create()
    {
        return view('user.pengaduan.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $tanggal = Carbon::now()->format('d-m-y');
        $input['tanggal_laporan'] = $tanggal;

        // kondisi input file
        if($request->hasFile('dokumentasi'))
        {
            $gambar = $request->file('dokumentasi'); //mengambil nilai/ file yang ada di form
            $extension = $gambar->getClientOriginalExtension(); //mengambil format/extension
            $path_simpan = 'public/images/pengaduan'; //tempat penyimpanan
            $nama = 'pengaduan-'.Carbon::now()->format('ymdhis').'.'.$extension; //nama file setelah diupload
            $simpan = $request->file('dokumentasi')->storeAs($path_simpan, $nama); //file disimpan di path dengan nama yang sudah ditentukan
            $input['dokumentasi'] = $nama; //nama yang akan dikirimkan ke database
        }

        Pengaduan::create($input);
        return redirect()->route('user')->with('success', 'Pengaduan anda berhasl dibuat');
    }

}
