<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailProduk;
use App\Produk;
use File;
use Image;

class DetailController extends Controller
{        
    public function index()
    {
        $batas=10;
        $detail = DetailProduk::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($detail->currentPage()-1);
        return view('detail.index', compact('no','detail'));
    }

    public function create(){
        $produk = Produk::all();
        return view('detail.create', compact('produk'));
    }

    public function store(Request $request){
        $this->validate($request,[
            // 'judul_produk'=>'required',
            'tipe'=>'required',
            'keterangan'=> 'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $detail = New DetailProduk();
        // $detail->judul_produk = $request->judul_produk;
        $detail->tipe = $request->tipe;
        $detail->keterangan = $request->keterangan;
        $detail->id_detail = $request->id_detail;
        $detail->foto = $request->file('foto')->store('post-images');

        // $foto = $request->foto;
        // $namafile=time().'.'.$foto->getClientOriginalExtension();

        // Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        // $foto->move('images/',$namafile);

        // $detail->foto=$namafile;
        $detail->save();
        return redirect('/detail')->with('pesan', 'Data Detail Produk berhasil disimpan');
    }

    public function destroy($id){
        $detail = DetailProduk::find($id);
        $detail->delete();
        return redirect('/detail')->with('pesan', 'Data Detail Produk Berhasil di Musnahkan');

    }

    public function edit($id){
        $detail = DetailProduk::find($id);
        $produk = Produk::all();
        return view('detail.edit', compact('detail', 'produk'));
    }

    public function update(Request $request, $id){
        $detail = DetailProduk::find($id);
        // $detail->judul_produk = $request->judul_produk;
        $detail->tipe = $request->tipe;
        $detail->keterangan = $request->keterangan;
        $detail->id_detail = $request->id_detail;
        $detail->foto = $request->file('foto')->store('post-images');
        // $foto = $request->foto;
        // $namafile=time().'.'.$foto->getClientOriginalExtension();

        // Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        // $foto->move('images/',$namafile);
        // $detail->foto=$namafile;
        $detail->update();
        return redirect('/detail')->with('pesan', 'Data Detail Produk Berhasil di Ubah');
    }

    public function search(Request $request)
    {
        $batas = 10;
        $cari = $request ->kata;
        $detail = DetailProduk::where('tipe', 'like', "%".$cari."%")->orwhere('keterangan', 'like', "%".$cari."%")->paginate($batas);
        $no = $batas * ($detail->currentPage()-1);
        return view('detail.search', compact('detail', 'no', 'cari'));
    }
}
