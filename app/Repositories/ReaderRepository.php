<?php

namespace App\Repositories;

use App\Http\Requests\ReaderRequest;
use App\Interfaces\ReaderInterface;
use App\Traits\ResponseAPI;
use App\Models\Reader;
use App\Http\Resources\ReadersResource;
use App\Http\Resources\ReaderCollection;
use Illuminate\Support\Facades\DB;
use App\Repositories\Eloquent\RepositoryEloquent;
use destroy;

class ReaderRepository extends RepositoryEloquent implements ReaderInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;
    public function model()
    {
        return Reader::class;
    }
    public function findBy($code, $name, $idUnit, $address, $status, $limit)
    {
        
        try {
            $query = $this->model->newQuery();
            if (!empty($code)) {
                $query = $this->where('code', 'like', "%$code%");
            }
            if (!empty($name)) {
                $query =$this->where('name', 'like', "%$name%");
            }
            if (!empty($idUnit)) {
                $query = $this->where('idUnit', $idUnit);
            }
            if (!empty($address)) {
                $query =$this->where('address', 'like', "%$address%");
            }
            if (!empty($status)) {
                $query =$this->where('status', $status);
            }

            $query = $query->orderBy('name', 'desc');
            // dd( $query->toSql() );
            // return $this->success("All Readers", $query->paginate($limit));
            return $this->success("All Readers", ReadersResource::collection($query->paginate($limit)));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
    public function getAllReaders()
    {
        try {
            $reader = Reader::paginate();
            return $this->success("All Readers", new ReaderCollection($reader));
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getReaderById($id)
    {
        try {
            $reader = Reader::find($id);

            // Check the Reader
            if (!$reader) return $this->error("No Reader with ID $id", 404);

            return $this->success("Reader Detail", $reader);
        } catch (\Exception $e) {
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
            if ($id && !$reader) return $this->error("No Reader with ID $id", 404);

            $reader->code = $request->code;
            $reader->name = $request->name;
            $reader->idUnit = $request->idUnit;
            $reader->address = $request->address;
            // Remove a whitespace and make to lowercase



            $reader->save();

            DB::commit();
            return $this->success(
                $id ? "Reader updated"
                    : "Reader created",
                $reader,
                $id ? 200 : 201
            );
        } catch (\Exception $e) {
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
            if (!$reader) return $this->error("No Reader with ID $id", 404);

            // Delete the Reader
            $reader->delete();

            DB::commit();
            return $this->success("Reader deleted", $reader);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
