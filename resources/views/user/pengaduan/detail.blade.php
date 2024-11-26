@extends('template.template')

@section('page-title')
Detail Pengaduan Saya
@endsection

@section('content')

<div class="card basic-data-table">
    <div class="card-header d-flex justify-content-between">
        <h5 class="card-title mb-0">{{$data->judul_laporan}}</h5>
        <span>{{$data->status}}</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table bordered-table mb-0">
                <tbody>
                    <tr>
                        <th>Judul Laporan</th>
                        <td>{{$data->judul_laporan}}</td>
                        <td rowspan="4" class="text-center"><img src="{{asset('storage/images/pengaduan/'.$data->dokumentasi)}}" alt="dokumentasi" width="400"></td>
                    </tr>
                    <tr>
                        <th>Jenis Laporan</th>
                        <td>{{$data->jenis}}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{$data->tanggal_laporan}}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{$data->keterangan}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card basic-data-table mt-3">
    <div class="card-body">
        @foreach ($tanggapan as $item)
        <div class="row">
            <div class="col-md-12">
                <div class="card-body p-24 d-flex flex-column gap-4">
                    <div class="alert alert-primary bg-primary-50 text-primary-600 border-primary-50 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                        <div class="d-flex align-items-center gap-2">
                            
                            {{$item->tanggapan}}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection