<!-- import template -->
@extends('template.template')

<!-- section nama halaman -->
@section('page-title')
Menanggapi pengaduan/laporan
@endsection

<!-- section konten yang ditampilkan -->
@section('content')

<div class="card basic-data-table">
    <div class="card-header">
        <h5 class="card-title mb-0">{{$data->judul_laporan}}</h5>
    </div>
    <div class="card-body">
        <form action="{{route('tanggapan.store')}}" method="post">
            @csrf
            <div class="row gy-3">
                <div class="col-12">
                    <input type="text" name="id_tanggapan" class="form-control" value="{{$data->id}}">
                </div>
                <div class="col-12">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="jenis" required>
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