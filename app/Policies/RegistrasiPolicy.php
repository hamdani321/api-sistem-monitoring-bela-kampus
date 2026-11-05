<?php

namespace App\Policies;

use App\Models\Registrasi;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RegistrasiPolicy
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
    public function view(User $user, Registrasi $registrasi): bool
    {
        // return false;
        $mahasiswa = $user->load('mahasiswa')['mahasiswa'];
        return $registrasi->nim_mahasiswa == $mahasiswa['nim'];
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
    public function update(User $user, Registrasi $registrasi): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Registrasi $registrasi): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Registrasi $registrasi): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Registrasi $registrasi): bool
    {
        return false;
    }
}
