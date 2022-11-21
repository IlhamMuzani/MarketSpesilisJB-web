<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Produkjasa extends Model
{
    protected $table = 'produkjasas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kd_user', 'category', 'jenis_pembuatan', 'model', 'ukuran', 'kecamatan', 'kelurahan', 'alamat', 'phone', 'harga', 'latitude', 'longitude', 'gambar', 'deskripsi','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "kd_user", "id");
    }
}
