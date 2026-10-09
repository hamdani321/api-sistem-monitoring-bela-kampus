<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PortalResource extends JsonResource
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
            "tahun_ajaran_id" => $this->tahun_ajaran_id,
            "waktu_mulai" => $this->waktu_mulai,
            'waktu_selesai' => $this->waktu_selesai,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'tahun_ajaran' => $this->tahun_ajaran,
            // 'kelompok' => $this->kelompok,
            // 'registrasi' => $this->registrasi
        ];
    }
}
