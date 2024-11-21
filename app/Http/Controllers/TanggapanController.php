<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\Pengaduan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengaduan::all();
        return view('admin.tanggapan.index', compact('data'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {

        $tanggal = Carbon::now()->format('d-m-y');

        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tanggal_tanggapan' => $tanggal,
            'update_tanggapan' => $tanggal,
            'tanggapan' => $request->tanggapan
        ]);
        
        $pengaduan = Pengaduan::find($request->id_pengaduan);
        $pengaduan->status = $request->status();
        $pengaduan->save();

        return redirect()->route('tanggapan.index');

        // dd($input);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pengaduan::find($id);
        return view('admin.tanggapan.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan)
    {
        //
    }
}
