<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UsersRepository;

class UserController extends Controller
{
    private $my_user;

    public function __construct(UsersRepository $my_user)
    {
        $this->my_user = $my_user;
    }

    public function index()
    {
        return $this->my_user->getByUserById(1);
    }

    public function getByID()
    {
        return $this->my_user->getByUserById(1);
    }

    public function all()
    {
        return $this->my_user->all();
    }
}
