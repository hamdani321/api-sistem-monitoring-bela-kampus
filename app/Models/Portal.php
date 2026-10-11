<?php

namespace App\Models;

use App\Http\Resources\PortalResource;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\UseResource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

#[Table("portal")]
#[Fillable(["id", 'tahun_ajaran_id', 'waktu_mulai', 'waktu_selesai', 'status', 'created_at', 'updated_at'])]
#[UseResource(PortalResource::class)]
class Portal extends Model
{
    public const string ACTIVE = "AKTIF";
    public const string NONACTIVE = "NONAKTIF";

    public function scopePortal(Builder $query)
    {
        $user = Auth::user();

        if ($user->hasRole('mahasiswa')) {
            return $query->with(['tahun_ajaran', 'registrasi' => function ($query) use ($user) {
                return $query->with(['registrasi_anggota'])->where(["nim_mahasiswa" => $user->load('mahasiswa')['mahasiswa']['nim']]);
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
