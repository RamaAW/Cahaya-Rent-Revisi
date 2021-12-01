<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Image;
use App\Dokumentasi;
use Symfony\Contracts\Service\Attribute\Required;

class DokController extends Controller
{
    public function index()
    {
        $batas = 10;
        $data_dok = Dokumentasi::orderBy('id')->paginate($batas);
        $no = $batas * ($data_dok->currentPage()-1);

        return view('dokumentasi.index', compact('data_dok', 'no'));
    }

    public function create(){
        return view('dokumentasi.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'judul'         => 'required|string',
            'tanggal'       => 'required|string',
            'foto'          => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $dok = New Dokumentasi();
        $dok->judul = $request->judul;
        $dok->tanggal = $request->tanggal;
        $dok->foto = $request->file('foto')->store('post-images');
        // $foto = $request->foto;
        // $namafile = time().'.'.
        // $foto->getClientOriginalExtension();

        // Image::make($foto)->save('thumb/'.$namafile);
        // $foto->move('images/', $namafile);
        // $dok->foto=$namafile;
        $dok->save();
        return redirect('/dok')->with('pesan', 'Data Dokumentasi berhasil disimpan');
    }

    public function destroy($id){
        $dok = Dokumentasi::find($id);
        $dok->delete();
        return redirect('/dok')->with('pesan', 'Data Dokumentasi Berhasil di Musnahkan');
    }

    public function edit($id){
        $dok = Dokumentasi::find($id);
        return view('dokumentasi.edit', compact('dok'));
    }

    public function update(Request $request, $id){
        $dok = Dokumentasi::find($id);
        $dok->judul = $request->judul;
        $dok->tanggal = $request->tanggal;
        $dok->foto = $request->file('foto')->store('post-images');
        // $foto = $request->foto;
        // $namafile = time().'.'.
        // $foto->getClientOriginalExtension();

        // Image::make($foto)->save('thumb/'.$namafile);
        // $foto->move('images/', $namafile);
        // $dok->foto=$namafile;
        $dok->update();
        return redirect('/dok')->with('pesan', 'Data Dokumentasi Berhasil di Ubah');
    }
}
