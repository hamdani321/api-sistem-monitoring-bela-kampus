<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("kelas")]
#[Fillable(["id", "nama", 'prodi_id', 'dosen_id', 'created_at', 'updated_at'])]
class Kelas extends Model
{
    //
}
