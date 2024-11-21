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
        <div class="row gy-3">
            <div class="col-12">
                <label class="form-label">First Name</label>
                <input type="text" name="#0" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="col-12">
                <label class="form-label">Last Name</label>
                <input type="text" name="#0" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="col-12">
                <label class="form-label">Email</label>
                <input type="email" name="#0" class="form-control" placeholder="Enter Email">
            </div>
            <div class="col-12">
                <label class="form-label">Phone</label>
                <div class="form-mobile-field">
                    <select class="form-select">
                        <option>US</option>
                        <option>US</option>
                        <option>US</option>
                        <option>US</option>
                    </select>
                    <input type="text" name="#0" class="form-control" placeholder="+1 (555) 000-0000">
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" name="#0" class="form-control" placeholder="*******">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary-600">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection