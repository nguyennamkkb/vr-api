<?php

namespace App\Interfaces;

use App\Http\Requests\TypeBiometricRequest;

interface TypeBiometricInterface
{
    public function findBy($name, $status, $limit);
    public function getAllTypeBiometrics();
    public function getTypeBiometricById($id);
    public function requestTypeBiometric(TypeBiometricRequest $request, $id = null);
    public function deleteTypeBiometric($id);
}