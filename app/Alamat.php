<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status','kelurahan', 'latitude', 'longitude'
    ];
}
