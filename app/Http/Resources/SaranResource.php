<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaranResource extends JsonResource
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
            'id'=>$this->id,
            'kd_produk'=>$this->kd_produk,
            'kd_user'=>$this->kd_user,
            'kd_pengajuan'=>$this->kd_pengajuan,
            'deskripsi'=>$this->deskripsi
        ];
    }
}