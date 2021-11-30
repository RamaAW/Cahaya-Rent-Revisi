<?php

namespace App\Http\Controllers;

use App\Alamat;
use App\About;
use App\Produk;
use App\Dokumentasi;
use App\Email;
use App\Faq;
use App\Reviews;
use App\WhatsApp;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data_about = About::all();
        $data_produk = Produk::all();
        $data_dok = Dokumentasi::all();
        $data_maps = Alamat::all();
        $data_review = Reviews::all();
        $data_faq = Faq::all();
        $data_wa = WhatsApp::all();
        $data_email = Email::all();
        return view('master', compact('data_about', 'data_produk', 'data_dok', 'data_maps', 'data_review', 'data_faq', 'data_wa', 'data_email'));
    }
}
