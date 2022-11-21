<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukjasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkjasas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('kd_user');
            $table->foreign('kd_user')->references('id')->on('users');
            $table->string('category');
            $table->string('jenis_pembuatan');
            $table->string('model');
            $table->string('ukuran');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->string('phone');
            $table->string('harga');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->string('status');
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
        Schema::dropIfExists('produkjasas');
    }
}
