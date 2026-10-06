<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

#[Table("portal")]
#[Fillable(["id", 'tahun_ajaran_id', 'waktu_mulai', 'waktu_selesai', 'created_at', 'updated_at'])]
class Portal extends Model
{
    public function scopePortal(Builder $query)
    {
        $user = Auth::user();

        if ($user->hasRole('mahasiswa')) {
            return $query->with(['tahun_ajaran', 'registrasi' => function ($query) use ($user) {
                return $query->where(["nim_mahasiswa" => $user->load('mahasiswa')['mahasiswa']['nim']]);
            }])->get();
        }

        return $query->with(['tahun_ajaran', 'registrasi'])->get();
    }

    public function tahun_ajaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function kelompok(): HasMany
    {
        return $this->hasMany(Kelompok::class, 'portal_id', 'id');
    }

    public function registrasi(): HasMany
    {
        return $this->hasMany(Registrasi::class, 'portal_id', 'id');
    }
}
