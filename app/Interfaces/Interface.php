<?php

namespace App\Interfaces;

use App\Http\Requests\CodeRequest;

interface CodeInterface
{
    /**
     * Get all code
     * 
     * @method  GET api/codes
     * @access  public
     */
    public function getAllCodes();

    /**
     * Get Code By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/codes/{id}
     * @access  public
     */
    public function getCodeById($id);

    /**
     * Create | Update code
     * 
     * @param   \App\Http\Requests\CodeRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/codes       For Create
     * @method  PUT     api/codes/{id}  For Update     
     * @access  public
     */
    public function requestCode(CodeRequest $request, $id = null);

    /**
     * Delete Code
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/codes/{id}
     * @access  public
     */
    public function deleteCode($id);
}