<?php

namespace App\Http\Controllers;

use App\WhatsApp;
use Illuminate\Http\Request;

class WaController extends Controller
{
    public function index()
    {
        $batas = 10;
        $data_wa = WhatsApp::orderBy('id')->paginate($batas);
        $no = $batas * ($data_wa->currentPage()-1);

        return view('wa.index', compact('data_wa', 'no'));
    }

    public function create(){
        return view('wa.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'link_wa'         => 'required|string',
        ]);
        $wa = New WhatsApp();
        $wa->link_wa = $request->link_wa;
        $wa->save();
        return redirect('/wa')->with('pesan', 'Data No WhatsApp berhasil disimpan');
    }

    public function destroy($id){
        $wa = WhatsApp::find($id);
        $wa->delete();
        return redirect('/wa')->with('pesan', 'Data No WhatsApp berhasil dihapus');
    }

    public function edit($id){
        $wa = WhatsApp::find($id);
        return view('wa.edit', compact('wa'));
    }

    public function update(Request $request, $id){
        $wa = WhatsApp::find($id);
        $wa->link_wa = $request->link_wa;
        $wa->update();
        return redirect('/wa')->with('pesan', 'Data No WhatsApp berhasil diubah');
    }
}
