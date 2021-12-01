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
        <h4> Penambahan About Us </h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('about.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Head</label>
            <input type="text" class="form-control" name="head">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Icon</label>
            <input type="file" class="date form-control" name="icon">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="/">Cancel</a>

        </form>
    </div>
@endsection