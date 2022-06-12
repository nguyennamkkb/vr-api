<?php

namespace App\Repositories;

use App\Http\Requests\TypeBiometricRequest;
use App\Interfaces\TypeBiometricInterface;
use App\Traits\ResponseAPI;
use App\Models\TypeBiometric;
use App\Http\Resources\TypeBiometric\TypeBiometricCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;

class TypeBiometricRepository extends RepositoryEloquent implements TypeBiometricInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;
    public function model()
    {
        return TypeBiometric::class;
    }
    public function findBy( $name, $status, $limit)
    {
        try {
            $query = $this->model->newQuery();
            
            if (!empty($name)) {
                $query = $this->where('name', 'like', "%$name%");
            }
            if (!empty($status)) {
                $query = $this->where('status', $status);
            }

            $query = $query->orderBy('name', 'desc');
            return $this->success("All TypeBiometrics", new TypeBiometricCollection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAllTypeBiometrics()
    {
        try {
            $TypeBiometric = TypeBiometric::paginate();
            return $this->success("All TypeBiometrics", new TypeBiometricCollection($TypeBiometric));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getTypeBiometricById($id)
    {
        try {
            $TypeBiometric = TypeBiometric::find($id);

            // Check the TypeBiometric
            if (!$TypeBiometric) return $this->error("No TypeBiometric with ID $id", 404);

            return $this->success("TypeBiometric Detail", $TypeBiometric);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestTypeBiometric(TypeBiometricRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If TypeBiometric exists when we find it
            // Then update the TypeBiometric
            // Else create the new one.
            $TypeBiometric = $id ? TypeBiometric::find($id) : new TypeBiometric;

            // Check the TypeBiometric 
            if ($id && !$TypeBiometric) return $this->error("No TypeBiometric with ID $id", 404);

          
            $TypeBiometric->name = $request->name;
            
            // Remove a whitespace and make to lowercase
            $TypeBiometric->save();

            DB::commit();
            return $this->success(
                $id ? "TypeBiometric updated"
                    : "TypeBiometric created",
                $TypeBiometric,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteTypeBiometric($id)
    {
        DB::beginTransaction();
        try {
            $TypeBiometric = TypeBiometric::find($id);

            // Check the TypeBiometric
            if (!$TypeBiometric) return $this->error("No TypeBiometric with ID $id", 404);

            // Delete the TypeBiometric
            $TypeBiometric->delete();

            DB::commit();
            return $this->success("TypeBiometric deleted", $TypeBiometric);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
