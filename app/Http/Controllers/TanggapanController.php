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
        $input = $request->all();
        $tanggal = Carbon::now()->format('d-m-y');
        $input['tgl_tanggapan'] = $tanggal;
        $input['update_tanggapan'] = $tanggal;
        
        // Tanggapan::create($input);

        dd($input);
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
