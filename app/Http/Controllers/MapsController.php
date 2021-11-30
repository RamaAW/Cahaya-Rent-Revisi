<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alamat;

class MapsController extends Controller
{
    public function index()
    {
        $batas = 10;
        $data_maps = Alamat::orderBy('id')->paginate($batas);
        $no = $batas * ($data_maps->currentPage()-1);

        return view('maps.index', compact('data_maps', 'no'));
    }

    public function create(){
        return view('maps.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'alamat'         => 'required|string',
            'no_telp'       => 'required|string',
            'link'       => 'required|string',
        ]);
        $maps = New Alamat();
        $maps->alamat = $request->alamat;
        $maps->no_telp = $request->no_telp;
        $maps->link = $request->link;
        $maps->save();
        return redirect('/maps')->with('pesan', 'Data Alamat berhasil disimpan');
    }

    public function destroy($id){
        $maps = Alamat::find($id);
        $maps->delete();
        return redirect('/maps')->with('pesan', 'Data Alamat berhasil dihapus');
    }

    public function edit($id){
        $maps = Alamat::find($id);
        return view('maps.edit', compact('maps'));
    }

    public function update(Request $request, $id){
        $maps = Alamat::find($id);
        $maps->alamat = $request->alamat;
        $maps->no_telp = $request->no_telp;
        $maps->link = $request->link;
        $maps->update();
        return redirect('/maps')->with('pesan', 'Data Alamat Berhasil di Ubah');
    }
}
