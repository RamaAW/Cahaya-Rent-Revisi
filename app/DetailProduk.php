<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    protected $table = 'tb_detail';
    public function produk(){
        return $this->belongsTo('App\Produk', 'id_detail', 'id');
    }
}
