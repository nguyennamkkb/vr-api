<?php

namespace App\Repositories;

use App\Http\Requests\UnitRequest;
use Illuminate\Http\Request;
use App\Interfaces\UnitInterface;
use App\Traits\ResponseAPI;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use destroy;

class UnitRepository implements UnitInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllUnits()
    {
        try {
            $unit = Unit::all();
            return $this->success("All Units", $unit);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getUnitById($id)
    {
        try {
            $unit = Unit::find($id);
            
            // Check the Unit
            if(!$unit) return $this->error("No Unit with ID $id", 404);

            return $this->success("Unit Detail", $unit);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestUnit(Request $request, $id = null)
    {
        
        DB::beginTransaction();
        try {
            // If Unit exists when we find it
            // Then update the Unit
            // Else create the new one.
            
            $unit = $id ? Unit::find($id) : new Unit;

            // Check the Unit 
            if($id && !$unit) return $this->error("No Unit with ID $id", 404);

            $unit->name = $request->name;
            // $unit->status = 0;
            // Remove a whitespace and make to lowercase

            $unit->save();

            DB::commit();
            return $this->success(
                $id ? "Unit updated"
                    : "Unit created",
                $unit, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteUnit($id)
    {
        DB::beginTransaction();
        try {
            $unit = Unit::find($id);

            // Check the Unit
            if(!$unit) return $this->error("No Unit with ID $id", 404);

            // Delete the Unit
            $unit->delete();

            DB::commit();
            return $this->success("Unit deleted", $unit);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}