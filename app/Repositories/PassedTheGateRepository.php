<?php

namespace App\Repositories;

use App\Http\Requests\PassedTheGateRequest;
use App\Interfaces\PassedTheGateInterface;
use App\Traits\ResponseAPI;
use App\Models\PassedTheGate;
use App\Http\Resources\PassedTheGate\PassedTheGateCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;

class PassedTheGateRepository extends RepositoryEloquent implements PassedTheGateInterface
{
    // Use ResponseAPI Trait isn this repository
    use ResponseAPI;
    public function model()
    {
        return PassedTheGate::class;
    }
    public function findBy($idreader,$iduser,$time,$status, $limit)
    {
        try {
            $query = $this->model->newQuery();
            if (!empty($idreader)) {

                $query = $this->where('idreader',$idreader);
            }
            if (!empty($iduser)) {
                $query = $this->where('iduser',$iduser);
            }
            if (!empty($time)) {
                $query = $this->where('time', $time);
            }
            
            if (!empty($status)) {
                $query = $this->where('status', $status);
            }

            $query = $query->orderBy('time', 'desc');
            return $this->success("All PassedTheGates", new PassedTheGateCollection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }

    }
    public function getAllPassedTheGates()
    {
        try {
            $PassedTheGate = PassedTheGate::paginate();
            return $this->success("All PassedTheGates", new PassedTheGateCollection($PassedTheGate));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getPassedTheGateById($id)
    {
        try {
            $PassedTheGate = PassedTheGate::find($id);

            // Check the PassedTheGate
            if (!$PassedTheGate) return $this->error("No PassedTheGate with ID $id", 404);

            return $this->success("PassedTheGate Detail", $PassedTheGate);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestPassedTheGate(PassedTheGateRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If PassedTheGate exists when we find it
            // Then update the PassedTheGate
            // Else create the new one.
            $PassedTheGate = $id ? PassedTheGate::find($id) : new PassedTheGate;

            // Check the PassedTheGate 
            if ($id && !$PassedTheGate) return $this->error("No PassedTheGate with ID $id", 404);

            $PassedTheGate->idreader = $request->idreader;
            $PassedTheGate->iduser = $request->iduser;
            $PassedTheGate->time = $request->time;

            // Remove a whitespace and make to lowercase
            $PassedTheGate->save();

            DB::commit();
            return $this->success(
                $id ? "PassedTheGate updated"
                    : "PassedTheGate created",
                $PassedTheGate,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deletePassedTheGate($id)
    {
        DB::beginTransaction();
        try {
            $PassedTheGate = PassedTheGate::find($id);

            // Check the PassedTheGate
            if (!$PassedTheGate) return $this->error("No PassedTheGate with ID $id", 404);

            // Delete the PassedTheGate
            $PassedTheGate->delete();

            DB::commit();
            return $this->success("PassedTheGate deleted", $PassedTheGate);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
