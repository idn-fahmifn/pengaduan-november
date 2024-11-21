<!-- import template -->
@extends('template.template')

<!-- section nama halaman -->
@section('page-title')
Detail Pengaduan
@endsection

<!-- section konten yang ditampilkan -->
@section('content')

<div class="card basic-data-table">
    <div class="card-header">
        <h5 class="card-title mb-0">Laporan Pengaduan</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table bordered-table mb-0">
                <tbody>
                    <tr>
                        <td>Nama Pelapor</td>
                        <td>{{$data->user->name}}</td>
                    </tr>
                    <tr>
                        <td>Judul Laporan</td>
                        <td>{{$data->judul_laporan}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pengaduan</td>
                        <td>{{$data->jenis}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Laporan</td>
                        <td>{{$data->tanggal_laporan}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>{{$data->keterangan}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card basic-card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5 class="card-title mb-0">Dokumentasi Laporan</h5>
        </div>
    </div>
    <div class="card-body">
        <img src="{{asset('storage/images/pengaduan/'.$data->dokumentasi)}}" alt="dokumentasi-laporan" class="img-fluid">
    </div>
</div>
@endsection