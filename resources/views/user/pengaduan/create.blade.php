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

        <form action="{{route('user-pengaduan.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row gy-3">
                <div class="col-12">
                    <label class="form-label">Judul Pengaduan</label>
                    <input type="text" name="judul_laporan" class="form-control" required placeholder="Masukan judul pengaduan">
                    <input type="text" name="id_user" value="{{Auth::user()->id}}" hidden>
                </div>
                <div class="col-12">
                    <label class="form-label">Jenis Pengaduan</label>
                    <select class="form-select" name="jenis" required>
                        <option value="">-Pilih Jenis-</option>
                        <option value="Kerusakan">Kerusakan</option>
                        <option value="Kehilangan">Kehilangan</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Dokumentasi</label>
                    <input type="file" class="form-control" required name="dokumentasi">
                </div>
                <div class="col-12">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" required class="form-control"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary-600">Submit</button>
                </div>
            </div>
        </form>


    </div>
</div>
@endsection