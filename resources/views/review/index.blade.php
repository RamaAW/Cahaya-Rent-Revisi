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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_review as $review)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$review->nama}}</td>
                    <td>{{$review->email}}</td>
                    <td>{{$review->review}}</td>
                    <td>{{$review->rating}}</td>
                    <td>
                        <form action="{{route('review.destroy', $review->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yakin mau delete?')">Delete</button>
                        </form>
                        <form action="{{route('review.edit', $review->id)}}" method="GET">
                            @csrf
                            <button onclick="return confirm('Yakin mau mengubah?')">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
<p align="right"><a href="{{route('review.create')}}">Tambah Reviews</a></p>
    <!-- // -->
    </div>
</div>
@endsection