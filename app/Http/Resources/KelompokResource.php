<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KelompokResource extends JsonResource
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
            'nim_mahasiswa' => $this->nim_mahasiswa,
            'nama' => $this->nama,
            "status" => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            //relasi
            'mahasiswa' => $this->mahasiswa,
            'kelompok_anggota' => $this->kelompok_anggota
        ];
    }
}
