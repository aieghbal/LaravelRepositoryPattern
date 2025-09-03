<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository extends Repository
{
    public function model()
    {
        return User::class;
    }

    public function getByUserById($id)
    {
        return $this->model
            ->where('id', $id)
            ->select('id', 'name', 'email')
            ->get();
    }
}
