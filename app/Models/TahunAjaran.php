<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("tahun_ajaran")]
#[Fillable(["id", "nama", 'tahun', 'jenis', 'created_at', 'updated_at'])]

class TahunAjaran extends Model
{
    //
}
