<?php

namespace App\Interfaces;

use App\Http\Requests\BiometricRequest;

interface BiometricInterface
{
    public function findBy($data,$status, $limit);
    public function getAllBiometrics();

   
    public function getBiometricById($id);

    public function requestBiometric(BiometricRequest $request, $id = null);

   
    public function deleteBiometric($id);
}