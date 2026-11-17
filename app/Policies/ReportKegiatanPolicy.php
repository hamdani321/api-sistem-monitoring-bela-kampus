<?php

namespace App\Policies;

use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use App\Models\ReportKegiatan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReportKegiatanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ReportKegiatan $reportKegiatan): bool
    {
        $mahasiswa = $user->load('mahasiswa')['mahasiswa'] ?? null;
        $registrasi = Registrasi::find($reportKegiatan->registrasi_id);
        $registrasiAnggota = RegistrasiAnggota::where(['registrasi_id' => $reportKegiatan->registrasi_id, "nim_mahasiswa" => $mahasiswa['nim'] ?? 0])->first();
        // return $registrasi->nim_mahasiswa == $mahasiswa['nim'];
        if ($user->hasRole('admin')) {
            return true;
        } else if ($mahasiswa != null && $registrasi->nim_mahasiswa == $mahasiswa['nim']) {
            return true;
        } else if ($registrasiAnggota != null) {
            return true;
        } else {
            return false;
        }
        // return $user->hasRole('admin') || $registrasi->nim == $mahasiswa['nim'] || $registrasiAnggota != null;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ReportKegiatan $reportKegiatan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ReportKegiatan $reportKegiatan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ReportKegiatan $reportKegiatan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ReportKegiatan $reportKegiatan): bool
    {
        return false;
    }
}
