<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $batas = 10;
        $data_faq = Faq::orderBy('id')->paginate($batas);
        $no = $batas * ($data_faq->currentPage()-1);

        return view('faq.index', compact('data_faq', 'no'));
    }

    public function create(){
        return view('faq.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'pertanyaan'         => 'required|string',
            'jawaban'       => 'required|string',
        ]);
        $faq = New Faq();
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->save();
        return redirect('/faq')->with('pesan', 'Data FAQ berhasil disimpan');
    }

    public function destroy($id){
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/faq')->with('pesan', 'Data FAQ berhasil dihapus');
    }

    public function edit($id){
        $faq = Faq::find($id);
        return view('faq.edit', compact('faq'));
    }

    public function update(Request $request, $id){
        $faq = Faq::find($id);
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->update();
        return redirect('/faq')->with('pesan', 'Data FAQ berhasil diubah');
    }
}
