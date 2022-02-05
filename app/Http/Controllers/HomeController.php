<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $batas = 10;
        $data_about = About::orderBy('id')->paginate($batas);
        $no = $batas * ($data_about->currentPage()-1);

        return view('about.index', compact('data_about', 'no'));
    }

}
