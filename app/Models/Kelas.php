<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Table("kelas")]
#[Fillable(["id", "nama", 'prodi_id', 'dosen_id', 'created_at', 'updated_at'])]
class Kelas extends Model
{
  public function prodi() : HasOne{
    return $this->hasOne(Prodi::class, "kode_prodi", 'prodi_id');
  }
}
