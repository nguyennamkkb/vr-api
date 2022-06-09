<?php

namespace App\Interfaces;

use App\Http\Requests\ReaderRequest;

interface ReaderInterface
{
    /**
     * Get all reader
     * 
     * @method  GET api/readers
     * @access  public
     */
    public function getAllReaders();

    /**
     * Get reader By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/readers/{id}
     * @access  public
     */
    public function getReaderById($id);

    /**
     * Create | Update reader
     * 
     * @param   \App\Http\Requests\ReaderRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/readers       For Create
     * @method  PUT     api/readers/{id}  For Update     
     * @access  public
     */
    public function requestReader(ReaderRequest $request, $id = null);

    /**
     * Delete reader
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/readers/{id}
     * @access  public
     */
    public function deleteReader($id);
}