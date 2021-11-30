@extends('main')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        
    <!-- // -->
    <div class="content">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Jenis Produk</th>
                    <th>Tipe</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail as $data)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$data->produk->jenis}}</td>
                    <td>{{$data->tipe}}</td>
                    <td>{{$data->keterangan}}</td>
                    <td>{{$data->foto}}</td>
                    <td>
                        <form action="{{route('detail.destroy', $data->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yakin mau delete?')">Delete</button>
                        </form>
                        <form action="{{route('detail.edit', $data->id)}}" method="GET">
                            @csrf
                            <button onclick="return confirm('Yakin mau mengubah?')">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
<p align="right"><a href="{{route('detail.create')}}">Tambah Detail Produk</a></p>
    <!-- // -->
    </div>
</div>
@endsection