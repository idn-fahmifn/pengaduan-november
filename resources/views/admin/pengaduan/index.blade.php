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
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Judul Laporan</th>
                        <th scope="col">Tanggal Laporan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td><a href="javascript:void(0)" class="text-primary-600">{{$item->user->name}}</a></td>
                            <td>{{$item->judul_laporan}}</td>
                            <td>{{$item->tanggal_laporan}}</td>
                            <td>
                                <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">{{$item->status}}</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)"
                                    class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)"
                                    class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)"
                                    class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection