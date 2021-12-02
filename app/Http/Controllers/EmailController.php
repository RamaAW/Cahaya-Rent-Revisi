<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $batas = 10;
        $data_email = Email::orderBy('id')->paginate($batas);
        $no = $batas * ($data_email->currentPage()-1);

        return view('email.index', compact('data_email', 'no'));
    }

    public function create(){
        return view('email.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'link_email'         => 'required|string',
        ]);
        $email = New Email();
        $email->link_email = $request->link_email;
        $email->save();
        return redirect('/email')->with('pesan', 'Data Email berhasil disimpan');
    }

    public function destroy($id){
        $email = Email::find($id);
        $email->delete();
        return redirect('/email')->with('pesan', 'Data Email berhasil dihapus');
    }

    public function edit($id){
        $email = Email::find($id);
        return view('email.edit', compact('email'));
    }

    public function update(Request $request, $id){
        $email = Email::find($id);
        $email->link_email = $request->link_email;
        $email->update();
        return redirect('/email')->with('pesan', 'Data Email berhasil diubah');
    }
}
