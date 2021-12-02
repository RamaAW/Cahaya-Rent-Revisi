<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Produk;
use GuzzleHttp\Handler\Proxy;
use Image;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $batas = 10;
        $data_produk = Produk::orderBy('id')->paginate($batas);
        $no = $batas * ($data_produk->currentPage()-1);

        return view('produk.index', compact('data_produk', 'no'));
    }

    public function create(){
        return view('produk.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'jenis'         => 'required|string',
            'deskripsi'     => 'required',
            'icon'          => 'required|image|mimes:jpeg,jpg,png',
            // 'tombol'        => 'required|string',
        ]);
        $produk = New Produk();
        $produk->jenis = $request->jenis;
        $produk->deskripsi = $request->deskripsi;
        $produk->produk_seo = Str::slug($request->jenis, '-');
        $produk->icon = $request->file('icon')->store('post-images');
        // $icon = $request->icon;
    
        // $namafile = time().'.'.
        // $icon->getClientOriginalExtension();

        // Image::make($icon)->resize(80,75)->save('thumb/'.$namafile);
        // $icon->move('images/', $namafile);
        // $produk->icon=$namafile;
        
        // $produk->tombol = $request->tombol;
        
        $produk->save();
        return redirect('/produk')->with('pesan', 'Data Produk berhasil disimpan');
    }

    public function destroy($id){
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk')->with('pesan', 'Data Produk Berhasil di Hapuskan');
    }

    public function edit($id){
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id){
        $produk = Produk::find($id);
        $produk->jenis = $request->jenis;
        $produk->deskripsi = $request->deskripsi;
        $produk->produk_seo = Str::slug($request->jenis, '-');
        $produk->icon = $request->file('icon')->store('post-images');
        
        // $icon = $request->icon;
        // $namafile = time().'.'.
        // $icon->getClientOriginalExtension();

        // Image::make($icon)->resize(80,75)->save('thumb/'.$namafile);
        // $icon->move('images/', $namafile);
        // $produk->icon=$namafile;

        // $produk->tombol = $request->tombol;
        
        $produk->update();
        return redirect('/produk')->with('pesan', 'Data Produk Berhasil di Ubah');
    }

    public function detpro($jenis){
        $produk = Produk::where('produk_seo', $jenis)->first();
        $details = $produk->photos()->orderBy('id', 'desc')->paginate(10);
        return view('detail-produk', compact('produk', 'details'));
    }
}
