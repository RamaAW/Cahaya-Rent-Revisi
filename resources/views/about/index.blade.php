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
        @if(Session::has('pesan'))
            <div class="alert alert-success">{{Session::get('pesan')}}</div>
        @endif
    <p align="right"><a href="{{route('about.create')}}" class="btn btn-warning">Tambah About Us</a></p>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Head</th>
                    <th>Deskripsi</th>
                    <th>Icon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_about as $about)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$about->head}}</td>
                    <td>{{$about->deskripsi}}</td>
                    <td><img src="{{asset('storage/'.$about->icon)}}" alt="" width="100" class="rounded mb-2"></td>
                    <td>
                        <form action="{{route('about.destroy', $about->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yakin mau delete?')">Delete</button>
                        </form>
                        <form action="{{route('about.edit', $about->id)}}" method="GET">
                            @csrf
                            <button onclick="return confirm('Yakin mau mengubah?')">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
<div>{{$data_about->links()}}</div>
    <!-- // -->
        </div>
    </div>
</div>

@endsection