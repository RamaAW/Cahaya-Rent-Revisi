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
        <h4> Penambahan Detail Produk </h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('detail.update', $detail->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis</label>
            <select name="id_detail" class="form-control">
            @foreach ($produk as $data)
                <option value="{{$data->id}}">{{$data->jenis}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tipe</label>
            <input type="text" class="form-control" name="tipe" value="{{$detail->tipe}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Keterangan/Spesifikasi</label>
            <textarea class="form-control" aria-label="With textarea" name="keterangan" value="{{$detail->keterangan}}"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto</label>
            <input type="file" class="date form-control" name="foto" value="{{$detail->foto}}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="/detail">Cancel</a>
        </form>
    </div>
@endsection