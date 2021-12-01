<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->text('keterangan');
            $table->string('foto');
            $table->unsignedBigInteger('id_detail');
            $table->foreign('id_detail')->references('id')->on('tb_produk')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
