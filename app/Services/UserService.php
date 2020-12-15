<?php

namespace App\Services;

use App\Interfaces\UserServiceInterface;
use App\Models\User;

class UserService implements UserServiceInterface
{
    public function addUser($newUser)
    {
        return User::create($newUser);
    }

    public function deleteUser($user)
    {
        return $user->delete() ? $user : [];
    }
}