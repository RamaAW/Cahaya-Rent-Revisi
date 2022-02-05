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
        <h4> Penambahan Review</h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('review.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Review</label>
            <input type="text" class="date form-control" name="review" value="{{ old('review') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rating</label>
            <input type="text" class="date form-control" name="rating" placeholder="Isikan hanya dengan angka 1-5!" value="{{ old('rating') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="/review">Cancel</a>

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