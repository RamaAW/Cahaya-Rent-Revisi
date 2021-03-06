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
        <form action="{{route('detail.search')}}" method="get" class="form-inline">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
                <label for="search" class="sr-only">Password</label>
                <input type="text" class="form-control" id="cari" name="kata" placeholder="Cari Produk Apa?">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Cari</button>
        </form>

        <br>
        @if(Session::has('pesan'))
            <div class="alert alert-success">{{Session::get('pesan')}}</div>
        @endif
    <p align="right"><a href="{{route('detail.create')}}" class="btn btn-warning">Tambah Detail Produk</a></p>
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
                    <td>{!!$data->keterangan!!}</td>
                    <td><img src="{{asset('storage/'.$data->foto)}}" style="width: 100px; height: 80px"></td>
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
<div>{{$detail->links()}}</div>
    </div>
    </div>
</div>
@endsection