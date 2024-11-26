<!-- import template -->
@extends('template.template')

<!-- section nama halaman -->
@section('page-title')
Menanggapi pengaduan/laporan
@endsection

<!-- section konten yang ditampilkan -->
@section('content')
<div class="card basic-data-table mb-4">
    <div class="card-header d-flex justify-content-between">
        <h5 class="card-title mb-0">{{$data->judul_laporan}}</h5>
        <span>{{$data->status}}</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table bordered-table mb-0 bg-transparent">
                <tbody>
                    <tr>
                        <td>Judul Laporan</td>
                        <td>{{$data->judul_laporan}}</td>
                        <td rowspan="4" class="text-center"><img src="{{asset('storage/images/pengaduan/'.$data->dokumentasi)}}" alt="dokumentasi" width="400"></td>
                    </tr>
                    <tr>
                        <td>Jenis Laporan</td>
                        <td>{{$data->jenis}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>{{$data->tanggal_laporan}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>{{$data->keterangan}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="card basic-data-table">
    <div class="card-header">
        <h5 class="card-title mb-0">{{$data->judul_laporan}}</h5>
    </div>
    <div class="card-body">
        <form action="{{route('tanggapan.store')}}" method="post">
            @csrf
            <div class="row gy-3">
                <div class="col-12">
                    <input type="text" name="id_pengaduan" class="form-control" value="{{$data->id}}">
                </div>
                <div class="col-12">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status" required>
                        <option value="{{$data->status}}">{{$data->status}}</option>
                        <option value="diproses">diproses</option>
                        <option value="selesai">selesai</option>
                        <option value="ditolak">ditolak</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Tanggapan</label>
                    <textarea name="tanggapan" required class="form-control"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary-600">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection