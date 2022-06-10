<?php

namespace App\Interfaces;

use App\Http\Requests\UnitRequest;
use Illuminate\Http\Request;

interface UnitInterface
{
    /**
     * Get all Unit
     * 
     * @method  GET api/units
     * @access  public
     */
    public function getAllUnits();

    /**
     * Get Unit By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/units/{id}
     * @access  public
     */
    public function getUnitById($id);

    /**
     * Create | Update Unit
     * 
     * @param   \App\Http\Requests\UnitRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/units       For Create
     * @method  PUT     api/units/{id}  For Update     
     * @access  public
     */
    public function requestUnit(Request $request, $id = null);

    /**
     * Delete Unit
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/units/{id}
     * @access  public
     */
    public function deleteUnit($id);
}