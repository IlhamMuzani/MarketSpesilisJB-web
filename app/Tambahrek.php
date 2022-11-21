<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tambahrek extends Model
{
    protected $table = 'tambahreks';
    protected $primaryKey = 'kd_rekening';
    protected $fillable = [
        'kd_user','jenis_bank', 'norek','nama'
    ];
}

