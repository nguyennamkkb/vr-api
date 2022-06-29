<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PassedTheGateRequest;
use App\Interfaces\PassedTheGateInterface;
use App\Models\PassedTheGate;
use Illuminate\Support\Facades\DB;

class PassedTheGateController extends Controller
{

    protected $PassedTheGateInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PassedTheGateInterface $PassedTheGateInterface)
    {
        $this->PassedTheGateInterface = $PassedTheGateInterface;
    }
    public function index(Request $request)
    {
       
        $idreader = $request->idreader;
        $iduser = $request->iduser;
        $time = $request->time;
        $status = $request->status;
        $limit = $request->limit;

        return $this->PassedTheGateInterface->findBy($idreader,$iduser,$time,$status, $limit);
      
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
    public function store(PassedTheGateRequest $request)
    {
        return $this->PassedTheGateInterface->requestPassedTheGate($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->PassedTheGateInterface->getPassedTheGateById($id);
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
    public function update(PassedTheGateRequest $request, $id)
    {
        return $this->PassedTheGateInterface->requestPassedTheGate($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->PassedTheGateInterface->deletePassedTheGate($id);
    
    }
    public function seeTimeSheet()
    {
        return $this->PassedTheGateInterface->seeTimeSheet();
    
    }
    public function updatepassedthegate(Request $request)
    {
        return $this->PassedTheGateInterface->updatepassedthegate($request);
    
    }
}
