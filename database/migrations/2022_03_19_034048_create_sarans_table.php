<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kd_produk');
            $table->foreign('kd_produk')->references('id')->on('produkjasas');
            $table->unsignedBigInteger('kd_user');
            $table->foreign('kd_user')->references('id')->on('users');
            $table->unsignedInteger('kd_pengajuan');
            $table->foreign('kd_pengajuan')->references('id')->on('pengajuans');
            $table->string('deskripsi');
            $table->string('rating');
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
        Schema::dropIfExists('sarans');
    }
}
