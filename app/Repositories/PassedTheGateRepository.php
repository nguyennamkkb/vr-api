<?php

namespace App\Repositories;

use App\Http\Requests\PassedTheGateRequest;
use App\Interfaces\PassedTheGateInterface;
use App\Traits\ResponseAPI;
use App\Models\PassedTheGate;
use App\Http\Resources\PassedTheGate\PassedTheGateCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use Carbon\Carbon;
use DateTime;
use destroy;
use stdClass;

class PassedTheGateRepository extends RepositoryEloquent implements PassedTheGateInterface
{
    // Use ResponseAPI Trait isn this repository
    use ResponseAPI;
    public function model()
    {
        return PassedTheGate::class;
    }
    public function findBy($idreader, $iduser, $time, $status, $limit)
    {
        try {
            $query = $this->model->newQuery();
            if (!empty($idreader)) {

                $query = $this->where('idreader', $idreader);
            }
            if (!empty($iduser)) {
                $query = $this->where('iduser', $iduser);
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
    public function seeTimeSheet()
    {
        $now = Carbon::now();
        $listUsers = DB::table('users')->select('id', 'name')->get();

        $numberDay = (string)$now->daysInMonth;
        $month = (string)$now->month;
        $year = (string)$now->year;
        $startTime = "";
        $endTime = "";
        // $unit

        // dd(gettype($month));
        $json_string =  array();

        foreach ($listUsers as  $user) {
            for ($i = 0; $i < $numberDay; $i++) {

                $startTime = "" . $year . "-" . $month . "-" . (string)($i + 1) . " 00:00:00";
                $endTime = "" . $year . "-" . $month . "-" . ($i + 1) . " 23:59:59";

                // dd($startTime);
                //2022-06-15 00:00:00
                //2022-06-16 00:00:00
                $firstTime = DB::table('passed_the_gate')->select('time')->where('iduser', $user->id)->where('time', '>=', $startTime)->where('time', '<=', $endTime)->orderBy('time', 'asc')->first();
                $lastTime = DB::table('passed_the_gate')->select('time')->where('iduser', $user->id)->where('time', '>=',$startTime)->where('time', '<=', $endTime)->orderBy('time', 'desc')->first();
                // $firstTime = DB::table('passed_the_gate')->select('time')->where('iduser', $user->id)->where('time', '>=','2022-06-15 00:00:00')->where('time', '<=', '2022-06-16 00:00:00')->orderBy('time', 'asc')->first();
                // $lastTime = DB::table('passed_the_gate')->select('time')->where('iduser', $user->id)->where('time', '>=','2022-06-15 00:00:00')->where('time', '<=', '2022-06-16 00:00:00')->orderBy('time', 'desc')->first();

                // dd($firstTime);
                // $str = '{"name":"'.$user->name.'","firstTime":"'.$firstTime.'","lastTime":"'.$lastTime.'"}';
                // $firstTime   =  new DateTime($firstTime?"":$firstTime);
                // $lastTime    =  new DateTime($lastTime?"":$lastTime);
                // $$firstTime = $firstTime->format('Y-m-d- H-i-s');


                $myObj = new stdClass();
                $myObj->id = $i;
                $myObj->name = $user->name;
                $myObj->date = "" . $year . "-" . $month . "-" . (string)($i + 1) ;
                $myObj->firstTime = !is_object($firstTime)?"":$firstTime->time;
                $myObj->lastTime =  !is_object($lastTime)?"":$lastTime->time;
                // $myObj->type1 =  gettype($lastTime);
                // $myObj->type2 =  gettype($lastTime);
                 
                array_push($json_string, $myObj);
                $firstTime=null;
                $firstTime=null;
                // dd($firstTime);

            }
        }
        // $myJSON = json_encode($json_string);

        // dd($json_string);
        return  $json_string;
        // DB::beginTransaction();
        // try {
        //     $PassedTheGate = PassedTheGate::find();

        //     // Check the PassedTheGate
        //     if (!$PassedTheGate) return $this->error("No PassedTheGate with ID $id", 404);

        //     // Delete the PassedTheGate
        //     $PassedTheGate->delete();

        //     DB::commit();
        //     return $this->success("PassedTheGate deleted", $PassedTheGate);
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return $this->error($e->getMessage(), $e->getCode());
        // }
    }

    public function updatepassedthegate($request)
    {
        $iduser=0;
        $json_string =  array();
        
        if ($request->data) {
            foreach ($request->data as $value) {
                // dd($value['vid']);
                $iduser =  DB::table('users')->select('id')->where('vid','like',$value['vid'])->first();
                if ($iduser!=null) {
                    PassedTheGateRepository::insertNew($iduser->id,$value['time']);
                    array_push($json_string, $iduser);
                }
                
            }
        }
        dd($json_string);
      
    }
    function insertNew($vID, $time)
    {
        DB::beginTransaction();
        try {
           
            $PassedTheGate = new PassedTheGate;

            // Check the PassedTheGate 
            

            $PassedTheGate->idreader = -1;
            $PassedTheGate->iduser = $vID;
            $PassedTheGate->time = $time;

            // Remove a whitespace and make to lowercase
            $PassedTheGate->save();

            DB::commit();
           
        } catch (\Exception $e) {
           
        }
    }
}
