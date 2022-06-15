<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReaderUserRequest;
use App\Interfaces\ReaderUserInterface;
use App\Models\ReaderUser;
use Illuminate\Support\Facades\DB;

class ReaderUserController extends Controller
{

    protected $ReaderUserInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ReaderUserInterface $ReaderUserInterface)
    {
        $this->ReaderUserInterface = $ReaderUserInterface;
    }
    public function index(Request $request)
    {
       
        $idreader = $request->idreader;
        $iduser = $request->iduser;
        $status = $request->status;
        $limit = $request->limit;

        return $this->ReaderUserInterface->findBy($idreader,$iduser,$status, $limit);
      
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
    public function store(ReaderUserRequest $request)
    {
        return $this->ReaderUserInterface->requestReaderUser($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->ReaderUserInterface->getReaderUserById($id);
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
    public function update(ReaderUserRequest $request, $id)
    {
        return $this->ReaderUserInterface->requestReaderUser($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->ReaderUserInterface->deleteReaderUser($id);
    }
    public function getAccessDoor(Request $request)
    {
        $fpIndex = $request->fpIndex;
        $readercode = $request->readercode;

        return $this->ReaderUserInterface->getAccessDoor($fpIndex, $readercode);
    }
    public function getAccessDoorByCard(Request $request)
    {
        // dd($request)
        $vid = $request->vid;
        $readercode = $request->readercode;

        return $this->ReaderUserInterface->getAccessDoorByCard($vid,$readercode);
    }
}
