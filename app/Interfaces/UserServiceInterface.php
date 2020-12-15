<?php

namespace App\Interfaces;


interface UserServiceInterface
{
    public function addUser($newUser);
    public function deleteUser($user);
}