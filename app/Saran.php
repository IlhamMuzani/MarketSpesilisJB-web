<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $table = 'sarans';
    protected $fillable = [
        'kd_produk','kd_user','kd_pengajuan','deskripsi', 'rating', 'status'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, "kd_pengajuan", "id");
    }

    public function produk()
    {
        return $this->belongsTo(Produkjasa::class, "kd_produk", "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "kd_user", "id");
    }
}