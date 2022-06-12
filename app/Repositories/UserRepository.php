<?php

namespace App\Repositories;

use App\Http\Requests\UserRequest;
use App\Interfaces\UserInterface;
use App\Traits\ResponseAPI;
use App\Models\User;
use App\Http\Resources\User\UserCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;

class UserRepository extends RepositoryEloquent implements UserInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;
    public function model()
    {
        return User::class;
    }
    public function findBy($name,$vid,$fid,$phone,$status, $limit)
    {
        try {
            $query = $this->model->newQuery();

            if (!empty($name)) {
                $query = $this->where('name', 'like', "%$name%");
            }
            if (!empty($vid)) {
                $query = $this->where('vid', 'like', "%$name%");
            }
            if (!empty($fid)) {
                $query = $this->where('fid', 'like', "%$fid%");
            }
            if (!empty($status)) {
                $query = $this->where('status', $status);
            }

            $query = $query->orderBy('id', 'desc');
        
            return $this->success("All Users", new UserCollection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAllUsers()
    {
        try {
            $User = User::paginate();
            return $this->success("All Users", new UserCollection($User));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getUserById($id)
    {
        try {
            $User = User::find($id);

            // Check the User
            if (!$User) return $this->error("No User with ID $id", 404);

            return $this->success("User Detail", $User);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestUser(UserRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If User exists when we find it
            // Then update the User
            // Else create the new one.
            $User = $id ? User::find($id) : new User;

            // Check the User 
            if ($id && !$User) return $this->error("No User with ID $id", 404);

            $User->name = $request->name;
            $User->vid = $request->vid;
            $User->fid = $request->fid;
            $User->phone = $request->phone;

            // Remove a whitespace and make to lowercase
            $User->save();

            DB::commit();
            return $this->success(
                $id ? "User updated"
                    : "User created",
                $User,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteUser($id)
    {
        DB::beginTransaction();
        try {
            $User = User::find($id);

            // Check the User
            if (!$User) return $this->error("No User with ID $id", 404);

            // Delete the User
            $User->delete();

            DB::commit();
            return $this->success("User deleted", $User);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
