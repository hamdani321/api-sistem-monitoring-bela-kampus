<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Table("registrasi")]
#[Fillable(["id", 'portal_id', 'sekolah_id', 'nim_mahasiswa', 'tipe', 'status', 'created_at', 'updated_at'])]

class Registrasi extends Model
{
    public function portal()
    {
        return $this->belongsTo(Portal::class);
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function mahasiswa(): HasOne
    {
        return $this->hasOne(Mahasiswa::class, 'nim', 'nim_mahasiswa');
    }

    public function kelompok(): HasOne
    {
        return $this->hasOne(Kelompok::class, 'registrasi_id', 'id');
    }

    public function report_kegiatan(): HasMany
    {
        return $this->hasMany(ReportKegiatan::class, 'registrasi_id', 'id');
    }

    public function registrasi_anggota(): HasMany
    {
        return $this->hasMany(RegistrasiAnggota::class, "id", 'registrasi_id');
    }
}
