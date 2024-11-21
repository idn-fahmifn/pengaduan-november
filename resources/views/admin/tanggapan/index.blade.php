<!-- import template -->
@extends('template.template')

<!-- section nama halaman -->
@section('page-title')
Pengaduan
@endsection

<!-- section konten yang ditampilkan -->
@section('content')

<div class="card basic-data-table">
    <div class="card-header">
        <h5 class="card-title mb-0">Laporan Pengaduan</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table bordered-table mb-0" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">Judul Laporan</th>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Tanggal Laporan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td><a href="javascript:void(0)" class="text-primary-600">{{$item->judul_laporan}}</a></td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->tanggal_laporan}}</td>
                            <td>
                                <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">{{$item->status}}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection