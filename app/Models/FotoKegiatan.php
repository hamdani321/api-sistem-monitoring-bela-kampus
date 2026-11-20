<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("foto_kegiatan", 'id', 'string', false)]

#[Fillable("id", 'report_kegiatan_id', 'path', 'created_at', 'updated_at')]
class FotoKegiatan extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    //
}
