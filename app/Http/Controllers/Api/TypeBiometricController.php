<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TypeBiometricRequest;
use App\Interfaces\TypeBiometricInterface;
use App\Models\TypeBiometric;
use Illuminate\Support\Facades\DB;

class TypeBiometricController extends Controller
{
    protected $TypeBiometricInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(TypeBiometricInterface $TypeBiometricInterface)
    {
        $this->TypeBiometricInterface = $TypeBiometricInterface;
    }
    public function index(Request $request)
    {
       
        $name = $request->name;
        $status = $request->status;
        $limit = $request->limit;
        return $this->TypeBiometricInterface->findBy($name, $status, $limit);
      
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
    public function store(TypeBiometricRequest $request)
    {
        return $this->TypeBiometricInterface->requestTypeBiometric($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->TypeBiometricInterface->getTypeBiometricById($id);
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
    public function update(TypeBiometricRequest $request, $id)
    {
        return $this->TypeBiometricInterface->requestTypeBiometric($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->TypeBiometricInterface->deleteTypeBiometric($id);
    
    }
}
