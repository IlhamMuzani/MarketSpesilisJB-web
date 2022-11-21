<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TambahrekResource extends JsonResource
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
            'kd_user'=>$this->kd_user,
            'kd_rekening'=>$this->kd_rekening,
            'jenis_bank'=>$this->jenis_bank,
            'norek'=>$this->norek,
            'nama'=>$this->nama,
            // 'gambar'=>env('ASSET_URL')."/uploads/".$this->gambar,
        ];
    }
}