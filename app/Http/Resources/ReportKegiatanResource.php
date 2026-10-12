<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportKegiatanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "registrasi_id" => $this->registrasi_id,
            "nim_mahasiswa" => $this->nim_mahasiswa,
            "nama_pic" => $this->nama_pic,
            "nomor_hp_pic" => $this->nomor_hp_pic,
            "foto" => $this->foto,
            'video' => $this->video,
            "deskripsi" => $this->deskripsi,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
        // return parent::toArray($request);
    }
}
