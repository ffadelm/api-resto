<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PesanansResource extends JsonResource
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
            'nama' => $this->nama,
            'no_meja' => $this->no_meja,
            'keranjangs_id' => [
                'id' => $this->keranjangs->id,
                'jumlah_pemesanan' => $this->keranjangs->jumlah_pemesanan,
                'catatan' => $this->keranjangs->catatan,
                'products_id' => [
                    'id' => $this->keranjangs->products->id,
                    'kode' => $this->keranjangs->products->kode,
                    'nama' => $this->keranjangs->products->nama,
                    'harga' => $this->keranjangs->products->harga,
                    'is_ready' => $this->keranjangs->products->is_ready,
                    'gambar' => $this->keranjangs->products->gambar
                ]
            ]
        ];
    }
}
