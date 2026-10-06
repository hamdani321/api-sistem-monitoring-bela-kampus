<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

#[Table("kelompok")]
#[Fillable(['id', "portal_id", 'registrasi_id', "sekolah_id", 'nama', 'nim_mahasiswa', 'status', 'created_at', 'updated_at'])]
class Kelompok extends Model
{
    protected $keyType = 'int';
    public $incrementing = true;


    public function scopeKelompok(Builder $query)
    {
        $user = Auth::user();
        if ($user->hasRole('mahasiswa')) {
            return $query->where(['nim_mahasiswa' => $user->load('mahasiswa')['mahasiswa']['nim']])->get();
        }
        return $query->get();
    }

    public function mahasiswa(): HasOne
    {
        return $this->hasOne(Mahasiswa::class, 'nim', 'nim_mahasiswa');
    }


    public function registrasi()
    {
        return $this->belongsTo(Registrasi::class);
    }

    public function kelompok_anggota()
    {
        return $this->hasMany(KelompokAnggota::class, "kelompok_id", 'id');
    }
}
