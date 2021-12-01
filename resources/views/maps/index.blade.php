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
    <p align="right"><a href="{{route('maps.create')}}" class="btn btn-warning">Tambah Maps</a></p>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Link Google Maps</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_maps as $maps)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$maps->alamat}}</td>
                    <td>{{$maps->no_telp}}</td>
                    <td>{{$maps->link}}</td>
                    <td>
                        <form action="{{route('maps.destroy', $maps->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yakin mau delete?')">Delete</button>
                        </form>
                        <form action="{{route('maps.edit', $maps->id)}}" method="GET">
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
</div>
@endsection