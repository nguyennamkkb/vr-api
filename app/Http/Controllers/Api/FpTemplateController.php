<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FpTemplateRequest;
use App\Interfaces\FpTemplateInterface;
use App\Models\FpTemplate;
use Illuminate\Support\Facades\DB;


class FpTemplateController extends Controller
{
    protected $FpTemplateInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(FpTemplateInterface $FpTemplateInterface)
    {
        $this->FpTemplateInterface = $FpTemplateInterface;
    }
    public function index(Request $request)
    {
       
        $idReader = $request->idReader;   
        $status = $request->status;
        $limit = $request->limit;
        return $this->FpTemplateInterface->findBy($idReader,$status,$limit);
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
    public function store(FpTemplateRequest $request)
    {
        return $this->FpTemplateInterface->requestFpTemplate($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->FpTemplateInterface->getFpTemplateById($id);
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
    public function update(FpTemplateRequest $request, $id)
    {
        return $this->FpTemplateInterface->requestFpTemplate($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->FpTemplateInterface->deleteFpTemplate($id);
    
    }
    public function getIdReaderbyid7462($id)
    {
        return $this->FpTemplateInterface->getIdReaderbyid7462($id);
    }
    
    function getBackupFPTemplate(Request $request)
    {
        $idReader = $request->idReader;
        $offset = $request->offset;
        return $this->FpTemplateInterface->getBackupFPTemplate($idReader, $offset);
    }
}
