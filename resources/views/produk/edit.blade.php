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
    <div class="container">
        <h4> Editing About Us </h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('produk.update', $produk->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis</label>
            <input type="text" class="form-control" name="jenis" value="{{$produk->jenis}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{$produk->deskripsi}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Icon</label>
            <br>
            <img src="{{ asset('storage/' . $produk->icon) }}" alt="" width="100" class="rounded mb-2">
            <input type="file" class="date form-control" name="icon" value="{{$produk->icon}}">
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="/produk">Cancel</a>

            <!-- <div>Judul <input type="text" name="judul"></div>
            <div>Penulis <input type="text" name="penulis"></div>
            <div>Harga <input type="text" name="harga"></div>
            <div>Tgl. Terbit <input type="text" name="tgl_terbit" class="date form-control" placeholder="yyyy/mm/dd"></div>
            <div><br>
                <button type="submit">Save</button>
                <a href="/buku">Cancel</a>
            </div> -->
        </form>
    </div>
@endsection