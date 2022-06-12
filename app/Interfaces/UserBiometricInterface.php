<?php

namespace App\Interfaces;

use App\Http\Requests\UserBiometricsRequest;

interface UserBiometricInterface
{
    public function findBy($iduser,$idbiometric,$status, $limit);
    public function getAllUserBiometrics();
    public function getUserBiometricById($id);
    public function requestUserBiometric(UserBiometricsRequest $request, $id = null);
    public function deleteUserBiometric($id);
}