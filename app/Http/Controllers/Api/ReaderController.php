<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReaderRequest;
use App\Interfaces\ReaderInterface;
use App\Models\Reader;
use Illuminate\Support\Facades\DB;
class ReaderController extends Controller
{
    protected $ReaderInterface;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ReaderInterface $ReaderInterface)
    {
        $this->ReaderInterface = $ReaderInterface;
    }
    public function index()
    {
        return $this->ReaderInterface->getAllReaders();
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
    public function store(ReaderRequest $request)
    {
        return $this->ReaderInterface->requestReader($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $this->ReaderInterface->getReaderById($id);
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
    public function update(ReaderRequest $request, $id)
    {
        return $this->ReaderInterface->requestReader($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->ReaderInterface->deleteReader($id);
    
    }
}
