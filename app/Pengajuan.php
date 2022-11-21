<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuans';
    protected $fillable = [
        'kd_produk','kd_user','gambar', 'deskripsi', 'harga', 'bukti', 'status', 'alamat', 'categori_pesanan', 'phone', 'latitude', 'longitude', 'status_dp', 'deskripsi_kesepakatan', 'panjang', 'lebar', 'pesan', 'category'
    ];

    public function produk()
    {
        return $this->belongsTo(Produkjasa::class, "kd_produk", "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "kd_user", "id");
    }
}