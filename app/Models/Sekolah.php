<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("sekolah")]
#[Fillable(["id", 'nama', 'email', 'alamat', 'telepon', 'latitude', 'longitude', 'created_at', 'updated_at'])]
class Sekolah extends Model {}
