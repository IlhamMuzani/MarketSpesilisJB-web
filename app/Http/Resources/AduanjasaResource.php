<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AduanjasaResource extends JsonResource
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
            'gambar'=>env('ASSET_URL')."/uploads/".$this->gambar,
            'deskripsi'=>$this->username
        ];
    }
}