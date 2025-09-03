<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository
{
    public function getByUserById($id)
    {
        return User::where('id', $id)
            ->select('id', 'name', 'email')
            ->get();
    }
}
