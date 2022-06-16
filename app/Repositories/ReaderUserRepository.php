<?php

namespace App\Repositories;

use App\Http\Requests\ReaderUserRequest;
use App\Interfaces\ReaderUserInterface;
use App\Traits\ResponseAPI;
use App\Models\ReaderUser;
use App\Models\PassedTheGate;
use App\Http\Resources\ReaderUser\ReaderUserCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;
use Carbon\Carbon;

class ReaderUserRepository extends RepositoryEloquent implements ReaderUserInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;
    public function model()
    {
        return ReaderUser::class;
    }
    public function findBy($idreader, $iduser, $status, $limit)
    {
        try {
            $query = $this->model->newQuery();
            if (!empty($idreader)) {

                $query = $this->where('idreader', $idreader);
            }
            if (!empty($iduser)) {
                $query = $this->where('iduser', $iduser);
            }
            if (!empty($status)) {
                $query = $this->where('status', $status);
            }

            $query = $query->orderBy('id', 'desc');
            return $this->success("All ReaderUsers", new ReaderUserCollection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAllReaderUsers()
    {
        try {
            $ReaderUser = ReaderUser::paginate();
            return $this->success("All ReaderUsers", new ReaderUserCollection($ReaderUser));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getReaderUserById($id)
    {
        try {
            $ReaderUser = ReaderUser::find($id);

            // Check the ReaderUser
            if (!$ReaderUser) return $this->error("No ReaderUser with ID $id", 404);

            return $this->success("ReaderUser Detail", $ReaderUser);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestReaderUser(ReaderUserRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If ReaderUser exists when we find it
            // Then update the ReaderUser
            // Else create the new one.
            $ReaderUser = $id ? ReaderUser::find($id) : new ReaderUser;
            // Check the ReaderUser 
            if ($id && !$ReaderUser) return $this->error("No ReaderUser with ID $id", 404);

            $ReaderUser->idreader = $request->idreader;
            $ReaderUser->iduser = $request->iduser;
            // Remove a whitespace and make to lowercase
            $ReaderUser->save();

            DB::commit();
            return $this->success(
                $id ? "ReaderUser updated"
                    : "ReaderUser created",
                $ReaderUser,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteReaderUser($id)
    {
        DB::beginTransaction();
        try {
            $ReaderUser = ReaderUser::find($id);

            // Check the ReaderUser
            if (!$ReaderUser) return $this->error("No ReaderUser with ID $id", 404);

            // Delete the ReaderUser
            $ReaderUser->delete();

            DB::commit();
            return $this->success("ReaderUser deleted", $ReaderUser);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAccessDoor($fpIndex, $readercode)
    {
        try {
            $resstt = 0;
            $fpIndex1 = ",$fpIndex,";
            // $readercode = "0000000000017C0A5907952A4C360610";
            $idreader = DB::table('readers')->select('id')->where('code', $readercode)->first();
            $idbio = DB::table('biometrics')->select('id')->where('idTypeBiometric', 3)->where('fpIndex', 'like', "%$fpIndex1%")->first();
            $iduser = DB::table('user_biometrics')->select('iduser')->where('idbiometric', $idbio->id)->first();

            $res = DB::table('reader_user')->select('id')->where('idreader', $idreader->id)->where('iduser', $iduser->iduser)->get()->count();
            if ($idreader == null || $idbio == null || $iduser == null) return 0;
            $time = Carbon::now();

            if ($res) {
                $resstt = ReaderUserRepository::CreatePassedToGate($iduser->iduser, $idreader->id, $time);
            }

            return $resstt;
        } catch (\Throwable $th) {
            return 0;
        }
    }
    public function getAccessDoorByCard($vid, $readercode)
    {
        try {
            $resstt = 0;
            // $readercode = "0000000000017C0A5907952A4C360610";
            $idreader = DB::table('readers')->select('id')->where('code', $readercode)->first();

            $iduser = DB::table('users')->select('id')->where('vid', 'like', "%$vid%")->first();
            $res = DB::table('reader_user')->select('id')->where('idreader', $idreader->id)->where('iduser', $iduser->id)->get()->count();
            if ($idreader == null || $iduser == null || $res == null) return 0;
            $time = Carbon::now();
            if ($res) {
                $resstt = ReaderUserRepository::CreatePassedToGate($iduser->id, $idreader->id, $time);
            }

            return $resstt;
        } catch (\Throwable $th) {
            return 0;
        }
    }
    function CreatePassedToGate($iduser, $idreader, $time)
    {
        // DB::beginTransaction();
        try {
            // If ReaderUser exists when we find it
            // Then update the ReaderUser
            // Else create the new one.
            $createptg =  new PassedTheGate;
            // Check the ReaderUser 

            $createptg->idreader = $idreader;
            $createptg->iduser = $iduser;
            $createptg->time = $time;
            // Remove a whitespace and make to lowercase
            $createptg->save();

            // DB::commit();
            return 1;
        } catch (\Exception $e) {
            // DB::rollBack();
            return 0;
        }
    }
}
