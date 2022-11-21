<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kd_produk');
            $table->foreign('kd_produk')->references('id')->on('produkjasas');
            $table->unsignedBigInteger('kd_user');
            $table->foreign('kd_user')->references('id')->on('users');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('harga');
            $table->string('bukti');
            $table->string('status');
            $table->string('alamat');
            $table->string('categori_pesanan');
            $table->string('phone');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('status_dp');
            $table->string('deskripsi_kesepakatan');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('pesan');
            $table->string('category');
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
        Schema::dropIfExists('pengajuans');
    }
}
