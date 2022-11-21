<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = 'hargas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status','jenis_pembuatan','ukuran', 'harga'
    ];
}