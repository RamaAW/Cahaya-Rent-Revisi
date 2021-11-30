<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviews;

class ReviewController extends Controller
{
    public function index()
    {
        $batas = 10;
        $data_review = Reviews::orderBy('id')->paginate($batas);
        $no = $batas * ($data_review->currentPage()-1);

        return view('review.index', compact('data_review', 'no'));
    }

    public function create(){
        return view('review.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'         => 'required|string',
            'email'       => 'required|string',
            'review'          => 'required',
            'rating'          => 'required',
        ]);
        $review = New Reviews();
        $review->nama = $request->nama;
        $review->email = $request->email;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();
        return redirect('/review')->with('pesan', 'Data Review berhasil disimpan');
    }

    public function destroy($id){
        $review = Reviews::find($id);
        $review->delete();
        return redirect('/review')->with('pesan', 'Data Review Berhasil di Musnahkan');
    }

    public function edit($id){
        $review = Reviews::find($id);
        return view('review.edit', compact('review'));
    }

    public function update(Request $request, $id){
        $review = Reviews::find($id);
        $review->nama = $request->nama;
        $review->email = $request->email;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->update();
        return redirect('/review')->with('pesan', 'Data Review Berhasil di Ubah');
    }
}
