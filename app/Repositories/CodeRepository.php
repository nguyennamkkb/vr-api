<?php

namespace App\Repositories;

use App\Http\Requests\CodeRequest;
use App\Interfaces\CodeInterface;
use App\Traits\ResponseAPI;
use App\Models\Code;
use Illuminate\Support\Facades\DB;

class CodeRepository implements CodeInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllCodes()
    {
        try {
            $codes = Code::all();
            return $this->success("All Codes", $codes);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getCodeById($id)
    {
        try {
            $code = Code::find($id);
            
            // Check the Code
            if(!$code) return $this->error("No Code with ID $id", 404);

            return $this->success("Code Detail", $code);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestCode(CodeRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If Code exists when we find it
            // Then update the Code
            // Else create the new one.
            $code = $id ? Code::find($id) : new Code;

            // Check the Code 
            if($id && !$code) return $this->error("No Code with ID $id", 404);

            $code->code = $request->code;
            // Remove a whitespace and make to lowercase
           
            
            // I dont wanna to update the password, 
            // Password must be fill only when creating a new Code.
            // if(!$id) $Code->password = \Hash::make($request->password);

            // Save the Code
            $code->save();

            DB::commit();
            return $this->success(
                $id ? "Code updated"
                    : "Code created",
                $code, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteCode($id)
    {
        DB::beginTransaction();
        try {
            $code = Code::find($id);

            // Check the Code
            if(!$code) return $this->error("No Code with ID $id", 404);

            // Delete the Code
            $code->delete();

            DB::commit();
            return $this->success("Code deleted", $code);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}