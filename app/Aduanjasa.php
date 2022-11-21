<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduanjasa extends Model
{
    protected $table = 'aduanjasas';
    protected $fillable = [
        'gambar', 'deskripsi'
    ];
}
