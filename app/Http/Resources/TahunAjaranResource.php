<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TahunAjaranResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "tahun" => $this->tahun,
            "jenis" => $this->jenis,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
