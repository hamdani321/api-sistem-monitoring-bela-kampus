<?php

namespace App\Services;

use App\Models\User;

class UsersServices
{
    public function getUsers()
    {
        return User::get();
    }
}
