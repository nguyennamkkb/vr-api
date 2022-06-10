<?php

namespace App\Interfaces;

use App\Http\Requests\ReaderRequest;

interface ReaderInterface
{
    public function findBy($code,$name,$idUnit,$address,$status, $limit);
    public function getAllReaders();
    public function getReaderById($id);
    public function requestReader(ReaderRequest $request, $id = null);
    public function deleteReader($id);
}