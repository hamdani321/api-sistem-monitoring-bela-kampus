<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

#[Table("undangan")]
#[Fillable(['id', "nim_mahasiswa", "kelompok_id", "status", 'created_at', 'updated_at'])]

class Undangan extends Model
{
    public const REQUEST = "Request";
    public const ACCEPT = "Accept";

    #[Scope]
    public function scopeUndangan(Builder $query)
    {
        $user = Auth::user()->load('mahasiswa');
        return $query->with(["mahasiswa", "kelompok" => function ($queryKelompok) {
            return $queryKelompok->with(['mahasiswa', 'registrasi' => function ($queryRegistrasi) {
                return $queryRegistrasi->with(["sekolah", 'portal' => function ($queryPortal) {
                    return $queryPortal->with(['tahun_ajaran']);
                }]);
            }]);
        }])->where(["nim_mahasiswa" => $user['mahasiswa']['nim']])->get();
    }

    public function mahasiswa(): HasOne
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim_mahasiswa");
    }

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }
}
