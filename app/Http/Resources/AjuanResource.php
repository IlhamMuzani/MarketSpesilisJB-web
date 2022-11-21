<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AJuanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'kd_ajuan'=>$this->kd_ajuan,
            'kd_jasa'=>$this->kd_jasa,
            'kd_userpelanggan'=>$this->kd_userpelanggan,
            'deskripsi'=>$this->deskripsi,
            'status'=>$this->status
        ];
    }
}