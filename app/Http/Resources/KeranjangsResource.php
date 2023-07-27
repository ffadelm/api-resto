<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KeranjangsResource extends JsonResource
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
            'jumlah_pemesanan' => $this->jumlah_pemesanan,
            'catatan' => $this->catatan,
            'products_id' => [
                'id' => $this->products->id,
                'kode' => $this->products->kode,
                'nama' => $this->products->nama,
                'harga' => $this->products->harga,
                'is_ready' => $this->products->is_ready,
                'gambar' => $this->products->gambar
            ]
        ];
    }
}
