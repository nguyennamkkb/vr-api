<?php

namespace App\Repositories;

use App\Http\Requests\ReaderRequest;
use App\Interfaces\ReaderInterface;
use App\Traits\ResponseAPI;
use App\Models\Reader;
use Illuminate\Support\Facades\DB;

class ReaderRepository implements ReaderInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllReaders()
    {
        try {
            $reader = Reader::all();
            return $this->success("All Readers", $reader);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getReaderById($id)
    {
        try {
            $reader = Reader::find($id);
            
            // Check the Reader
            if(!$reader) return $this->error("No Reader with ID $id", 404);

            return $this->success("Reader Detail", $reader);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestReader(ReaderRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If Reader exists when we find it
            // Then update the Reader
            // Else create the new one.
            $reader = $id ? Reader::find($id) : new Reader;

            // Check the Reader 
            if($id && !$reader) return $this->error("No Reader with ID $id", 404);

            $reader->Reader = $request->Reader;
            // Remove a whitespace and make to lowercase
           
            

            $reader->save();

            DB::commit();
            return $this->success(
                $id ? "Reader updated"
                    : "Reader created",
                $reader, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteReader($id)
    {
        DB::beginTransaction();
        try {
            $reader = Reader::find($id);

            // Check the Reader
            if(!$reader) return $this->error("No Reader with ID $id", 404);

            // Delete the Reader
            $reader->delete();

            DB::commit();
            return $this->success("Reader deleted", $reader);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}