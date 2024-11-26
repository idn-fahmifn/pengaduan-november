@extends('template.template')

@section('page-title')
 Dashboard User
@endsection

@section('content')
<div class="card basic-data-table">
    <div class="card-header d-flex justify-content-between">
        <h5 class="card-title mb-0">Laporan Pengaduan</h5>
        <a href="{{route('pengaduan.create')}}" class="btn btn-success">Ajukan Pengaduan</a>
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
                            <td><a href="{{route('detail-pengaduan', $item->id )}}" class="text-primary-600">{{$item->judul_laporan}}</a></td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->tanggal_laporan}}</td>
                            <td>
                                @if ($item->status == 'pending')
                                    <span class="bg-primary-focus text-primary-main px-24 py-4 rounded-pill fw-medium text-sm">{{$item->status}}</span>
                                @elseif ($item->status == 'diproses')
                                    <span class="bg-info-focus text-info-main px-24 py-4 rounded-pill fw-medium text-sm">{{$item->status}}</span>
                                @elseif($item->status == 'selesai')
                                    <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">{{$item->status}}</span>
                                @else
                                    <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">{{$item->status}}</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection