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
    <p align="right"><a href="{{route('produk.create')}}" class="btn btn-warning">Tambah Jenis Produk</a></p>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>Icon</th>
                    <th>Produk Seo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_produk as $produk)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$produk->jenis}}</td>
                    <td>{{$produk->deskripsi}}</td>
                    <td>{{$produk->icon}}</td>
                    <td>{{$produk->produk_seo}}</td>
                    <td>
                        <form action="{{route('produk.destroy', $produk->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yakin mau delete?')">Delete</button>
                        </form>
                        <form action="{{route('produk.edit', $produk->id)}}" method="GET">
                            @csrf
                            <button onclick="return confirm('Yakin mau mengubah?')">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
    <!-- // -->
    </div>
</div>
@endsection