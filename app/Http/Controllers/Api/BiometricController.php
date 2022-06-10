<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BiometricRequest;
use App\Interfaces\BiometricInterface;
use App\Models\Biometric;
use Illuminate\Support\Facades\DB;
class BiometricController extends Controller
{
    protected $BiometricInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BiometricInterface $biometricInterface)
    {
        $this->biometricInterface = $biometricInterface;
    }
    public function index()
    {
        return $this->biometricInterface->getAllBiometrics();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BiometricRequest $request)
    {
        return $this->biometricInterface->requestBiometric($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->biometricInterface->getBiometricById($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BiometricRequest $request, $id)
    {
        return $this->biometricInterface->requestBiometric($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->biometricInterface->deleteBiometric($id);
    
    }
}
