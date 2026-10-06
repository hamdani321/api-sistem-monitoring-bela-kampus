<?php

namespace App\Http\Resources\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaInvitationResource extends JsonResource
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
            "email" => $this->email,
            "nim" => $this->nim,
            "prodi_id" => $this->kode_prodi,
            'kelas_id' => $this->kelas_id,
            'jenis_kelamin' => $this->jenis_kelamin,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,

            //relasi
            "undangan" => $this->undangan,
            "prodi" => $this->prodi
        ];
    }
}
