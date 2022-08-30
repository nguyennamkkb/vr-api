<?php

namespace App\Repositories;

use App\Http\Requests\FpTemplateRequest;
use App\Interfaces\FpTemplateInterface;
use App\Traits\ResponseAPI;
use App\Models\FpTemplate;
use App\Http\Resources\FpTemplate\FpTemplateCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;
use Illuminate\Http\Request;

class FpTemplateRepostory extends RepositoryEloquent implements FpTemplateInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;
    public function model()
    {
        return FpTemplate::class;
    }
    public function findBy($idReader,$status,$limit)
    {
        try {
            $query = $this->model->newQuery();
            if (!empty($idReader)) {

                $query = $this->where('idReader', 'like', "%$idReader%");
            }
            
            if (!empty($status)) {
                $query = $this->where('status', $status);
            }

            $query = $query->orderBy('id', 'desc');
            return $this->success("All FpTemplates", new FpTemplateCollection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAllFpTemplates()
    {
        try {
            $FpTemplate = FpTemplate::paginate();
            return $this->success("All FpTemplates", new FpTemplateCollection($FpTemplate));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getFpTemplateById($id)
    {
        try {
            $FpTemplate = FpTemplate::find($id);

            // Check the FpTemplate
            if (!$FpTemplate) return $this->error("No FpTemplate with ID $id", 404);

            return $this->success("FpTemplate Detail", $FpTemplate);
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestFpTemplate(FpTemplateRequest $request, $id = null)
    {
        // dd($request->idReader, $request->template, $request->index);

        DB::beginTransaction();
        try {
            // If FpTemplate exists when we find it
            // Then update the FpTemplate
            // Else create the new one.
            $issetFpTemplate = DB::table('fpTemplates')->select("id","template")->where('template','like', "%$request->template%")->limit(1)->first();
            // dd($issetFpTemplate);
            if($id){
                $FpTemplate = FpTemplate::find($id);
            }
            else if(!is_null($issetFpTemplate)){
                
                $FpTemplate = FpTemplate::find($issetFpTemplate->id);
            }
            else{
                $FpTemplate = new FpTemplate;
                // dd($FpTemplate);
            }
           
            // Check the FpTemplate 
            if ($id && !$FpTemplate) return $this->error("No FpTemplate with ID $id", 404);

            $FpTemplate->idReader = $request->idReader;
            $FpTemplate->template = $request->template;
            $FpTemplate->index = $request->index;
            $FpTemplate->save();
            DB::commit();
            // return $this->success(
            //     $id ? "FpTemplate updated"
            //         : "FpTemplate created",
            //     $FpTemplate,
            //     $id ? 200 : 201
            // );
            return "1";
        } catch (\Exception $e) {
            DB::rollBack();
            // return $this->error($e->getMessage(), $e->getCode());
            return "0";
        }
    }

    public function deleteFpTemplate($id)
    {
        DB::beginTransaction();
        try {
            $FpTemplate = FpTemplate::find($id);

            // Check the FpTemplate
            if (!$FpTemplate) return $this->error("No FpTemplate with ID $id", 404);

            // Delete the FpTemplate
            $FpTemplate->delete();

            DB::commit();
            return $this->success("FpTemplate deleted", $FpTemplate);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getIdReaderbyid7462($id7462)
    {
        $idReader = DB::table('readers')->select('id')->where('code', '=', "$id7462")->first();
        // dd($idReader);
        if ($idReader) {
            return $idReader->id;
        }else{
            return "0";
        }
        
    }
    public function getBackupFPTemplate($idReader, $offset)
    {
        $FpTemplate = DB::table('fpTemplates')->select('template',"index")->where('idReader', $idReader)->offset($offset)->first();
        if ($FpTemplate) {
            return $FpTemplate->index."_".$FpTemplate->template;
        }
        return "0";
    }
    
}
