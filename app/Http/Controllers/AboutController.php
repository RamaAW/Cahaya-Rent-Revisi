<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\About;
use Image;
use Symfony\Contracts\Service\Attribute\Required;

class AboutController extends Controller
{
    public function index()
    {
        $batas = 10;
        $data_about = About::orderBy('id')->paginate($batas);
        $no = $batas * ($data_about->currentPage()-1);

        return view('about.index', compact('data_about', 'no'));
    }

    public function create(){
        return view('about.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'head'         => 'required|string',
            'deskripsi'       => 'required',
            'icon'          => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $about = New About();
        $about->head = $request->head;
        $about->deskripsi = $request->deskripsi;
        $icon = $request->icon;
        $namafile = time().'.'.
        $icon->getClientOriginalExtension();

        Image::make($icon)->resize(100,100)->save('thumb/'.$namafile);
        $icon->move('images/', $namafile);
        $about->icon=$namafile;
        $about->save();
        return redirect('/')->with('pesan', 'Data About Us berhasil disimpan');
    }

    public function destroy($id){
        $about = About::find($id);
        $about->delete();
        return redirect('/')->with('pesan', 'Data About Us Berhasil di Musnahkan');
    }

    public function edit($id){
        $about = About::find($id);
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, $id){
        $about = About::find($id);
        $about->head = $request->head;
        $about->deskripsi = $request->deskripsi;
        $icon = $request->icon;
        $namafile = time().'.'.
        $icon->getClientOriginalExtension();

        Image::make($icon)->resize(100,100)->save('thumb/'.$namafile);
        $icon->move('images/', $namafile);
        $about->icon=$namafile;
        $about->update();
        return redirect('/')->with('pesan', 'Data About Us Berhasil di Ubah');
    }
}
