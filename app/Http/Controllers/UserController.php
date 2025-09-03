<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UsersRepository;

class UserController extends Controller
{
    public function index(UsersRepository $user){
        $user = $user->getByUserById(1);
        dd($user);
    }

    public function getByID()
    {
        $users = resolve('users');
        $user = $users->getByUserById(1);
        dd($user);
    }
}
