<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserBiometricsRequest;
use App\Interfaces\UserBiometricInterface;
use App\Models\UserBiometric;
use Illuminate\Support\Facades\DB;
class UserBiometricController extends Controller
{
    protected $UserBiometricInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(UserBiometricInterface $UserBiometricInterface)
    {
        $this->UserBiometricInterface = $UserBiometricInterface;
    }
    public function index(Request $request)
    {
       
        $iduser = $request->iduser;
        $idtype = $request->idtype;
        $idbiometric = $request->idbiometric;
        $status = $request->status;
        $limit = $request->limit;
        return $this->UserBiometricInterface->findBy($iduser,$idtype,$idbiometric,$status, $limit);
      
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
    public function store(UserBiometricsRequest $request)
    {
        return $this->UserBiometricInterface->requestUserBiometric($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->UserBiometricInterface->getUserBiometricById($id);
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
    public function update(UserBiometricsRequest $request, $id)
    {
        return $this->UserBiometricInterface->requestUserBiometric($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->UserBiometricInterface->deleteUserBiometric($id);
    
    }
}
