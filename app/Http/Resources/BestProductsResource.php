<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BestProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'kode' => $this->kode,
            'nama' => $this->nama,
            'harga' => $this->harga,
            'is_ready' => $this->is_ready,
            'gambar' => $this->gambar,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
