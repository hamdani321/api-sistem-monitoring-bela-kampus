<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Table('registrasi_anggota')]
#[Fillable(['id', 'registrasi_id', 'portal_id', 'nim_mahasiswa', 'created_at', 'updated_at'])]
class RegistrasiAnggota extends Model
{

    public function registrasi()
    {
        return $this->belongsTo(Registrasi::class);
    }

    public function mahasiswa() : HasOne {
        return $this->hasOne(Mahasiswa::class, 'nim', 'nim_mahasiswa');
    }
}
