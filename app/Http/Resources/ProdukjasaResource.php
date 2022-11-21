<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdukjasaResource extends JsonResource
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
            'nama_toko'=>$this->nama_toko,
            'jenis_pembuatan'=>$this->jenis_pembuatan,
            'alamat'=>$this->alamat,
            'phone'=>$this->phone,
            'harga'=>$this->harga,
            'latitude'=>$this->latitude,
            'longitude'=>$this->longitude,
            'deskripsi'=>$this->deskripsi,
            'gambar'=>env('ASSET_URL')."/uploads/".$this->gambar,
        ];
    }
}