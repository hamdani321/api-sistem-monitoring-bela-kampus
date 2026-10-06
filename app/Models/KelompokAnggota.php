<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("kelompok_anggota")]
#[Fillable(['id', 'kelompok_id', 'registrasi_id', 'nim_mahasiswa', 'created_at', 'updated_at'])]
class KelompokAnggota extends Model
{
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, "nim_mahasiswa", "nim");
    }
}
