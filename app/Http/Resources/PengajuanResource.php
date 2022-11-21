<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PengajuanResource extends JsonResource
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
            'kd_pengajuan'=>$this->kd_pengajuan,
            'kd_jasa'=>$this->kd_jasa,
            'kd_userpelanggan'=>$this->kd_userpelanggan,
            'gambar'=>env('ASSET_URL')."/uploads/".$this->gambar,
            'deskripsi'=>$this->deskripsi,
            'status'=>$this->status
        ];
    }
}