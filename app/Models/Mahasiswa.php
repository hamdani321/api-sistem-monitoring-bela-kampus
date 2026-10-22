<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Table("mahasiswa")]
#[Fillable(["id", "nama", 'email', 'nim', 'kode_prodi', 'kelas_id', 'jenis_kelamin', 'created_at', 'updated_at'])]
class Mahasiswa extends Model
{
    #[Scope]
    public function scopeMahasiswa(Builder $query)
    {
        return $query->with(['prodi'])->get();
    }

    #[Scope]
    public function scopeMahasiswaInvitation(Builder $query, string $kelompokId)
    {
        return $query->with(['undangan' => function ($queryUndangan) use ($kelompokId) {
            return $queryUndangan->where('kelompok_id', $kelompokId);
        }, 'prodi'])->orderBy('nama', "ASC")->get();
    }

    public function prodi(): HasOne
    {
        return $this->hasOne(Prodi::class, "kode_prodi", "kode_prodi");
    }

    public function undangan(): HasMany
    {
        return $this->hasMany(Undangan::class, "nim_mahasiswa", "nim");
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function registrasi(): HasMany
    {
        return $this->hasMany(Registrasi::class, "nim_mahasiswa", 'nim');
    }

    public function registrasi_anggota(): HasMany
    {
        return $this->hasMany(RegistrasiAnggota::class, 'nim_mahasiswa', 'nim');
    }
}
