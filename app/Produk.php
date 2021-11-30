<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tb_produk';
    public function photos(){
        return $this->hasMany('App\DetailProduk', 'id_detail', 'id');
    }
}