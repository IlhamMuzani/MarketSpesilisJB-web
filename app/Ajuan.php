<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajuan extends Model
{
    protected $table = 'ajuans';
    protected $primaryKey = 'kd_ajuan';
    protected $fillable = [
        'kd_jasa','kd_userpelanggan','deskripsi','status'
    ];
}
