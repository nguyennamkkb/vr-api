<?php

namespace App\Repositories;

use App\Http\Requests\UserBiometricsRequest;
use App\Interfaces\UserBiometricInterface;
use App\Traits\ResponseAPI;
use App\Models\UserBiometric;
use App\Http\Resources\UserBiometric\UserBiometricCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;

class UserBiometricRepository extends RepositoryEloquent implements UserBiometricInterface

{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;
    public function model()
    {
        return UserBiometric::class;
    }
    public function findBy($iduser,$idbiometric,$status, $limit)
    {
        try {
            $query = $this->model->newQuery();
            if (!empty($iduser)) {

                $query = $this->where('iduser',$iduser);
            }
            if (!empty($idbiometric)) {
                $query = $this->where('idbiometric',$idbiometric);
            }
            if (!empty($status)) {
                $query = $this->where('status', $status);
            }

            $query = $query->orderBy('id', 'desc');
            return $this->success("All UserBiometrics", new UserBiometricCollection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAllUserBiometrics()
    {
        try {
            $UserBiometric = UserBiometric::paginate();
            return $this->success("All UserBiometrics", new UserBiometricCollection($UserBiometric));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getUserBiometricById($id)
    {
        try {
            $UserBiometric = UserBiometric::find($id);

            //// Check the UserBiometric
            if (!$UserBiometric) return $this->error("No UserBiometric with ID $id", 404);

            return $this->success("UserBiometric Detail", $UserBiometric);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestUserBiometric(UserBiometricsRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If UserBiometric exists when we find it
            // Then update the UserBiometric
            // Else create the new one.
            $UserBiometric = $id ? UserBiometric::find($id) : new UserBiometric;

            // Check the UserBiometric 
            if ($id && !$UserBiometric) return $this->error("No UserBiometric with ID $id", 404);

            $UserBiometric->iduser = $request->iduser;
            $UserBiometric->idbiometric = $request->idbiometric;
            $UserBiometric->save();

            DB::commit();
            return $this->success(
                $id ? "UserBiometric updated"
                    : "UserBiometric created",
                $UserBiometric,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteUserBiometric($id)
    {
        DB::beginTransaction();
        try {
            $UserBiometric = UserBiometric::find($id);

            // Check the UserBiometric
            if (!$UserBiometric) return $this->error("No UserBiometric with ID $id", 404);

            // Delete the UserBiometric
            $UserBiometric->delete();

            DB::commit();
            return $this->success("UserBiometric deleted", $UserBiometric);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
