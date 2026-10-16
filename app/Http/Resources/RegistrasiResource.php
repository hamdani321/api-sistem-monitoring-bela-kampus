<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistrasiResource extends JsonResource
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
            "portal_id" => $this->portal_id,
            "sekolah_id" => $this->sekolah_id,
            'nim_mahasiswa' => $this->nim_mahasiswa,
            "tipe" => $this->tipe,
            "status" => $this->status,
            "create_at" => $this->created_at,
            'updated_at' => $this->updated_at,

            //relasi
            "mahasiswa" => $this->mahasiswa,
            'sekolah' => $this->sekolah,
            'portal' => $this->portal,
            'registrasi_anggota' => $this->registrasi_anggota
        ];
    }
}
