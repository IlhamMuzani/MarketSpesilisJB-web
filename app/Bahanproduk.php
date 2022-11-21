<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahanproduk extends Model
{
    protected $table = 'bahanproduks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status','jenis'
    ];
}
