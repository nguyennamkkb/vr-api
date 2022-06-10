<?php

namespace App\Interfaces;

use App\Http\Requests\BiometricRequest;

interface BiometricInterface
{
    /**
     * Get all biometric
     * 
     * @method  GET api/biometric
     * @access  public
     */
    public function getAllBiometrics();

    /**
     * Get biometric By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/biometric/{id}
     * @access  public
     */
    public function getBiometricById($id);

    /**
     * Create | Update biometric
     * 
     * @param   \App\Http\Requests\biometricRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/biometric       For Create
     * @method  PUT     api/biometric/{id}  For Update     
     * @access  public
     */
    public function requestBiometric(BiometricRequest $request, $id = null);

    /**
     * Delete biometric
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/biometric/{id}
     * @access  public
     */
    public function deleteBiometric($id);
}