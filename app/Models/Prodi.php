<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("prodi", 'id', 'string', false)]
#[Fillable(["id", "kode_prodi", 'nama', 'singkatan', 'jenjang', 'kaprodi', 'created_at', 'updated_at'])]
class Prodi extends Model {}
