<?php

namespace App\Interfaces;

use App\Http\Requests\UserRequest;

interface UserInterface
{
    public function findBy($name,$vid,$fid,$phone,$status, $limit);
    public function getAllUsers();
    public function getUserById($id);
    public function requestUser(UserRequest $request, $id = null);
    public function deleteUser($id);
}