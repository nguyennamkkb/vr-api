<?php

namespace App\Interfaces;

use App\Http\Requests\CodeRequest;

interface CodeInterface
{
    public function findBy($code,$name,$idUnit,$address,$status, $limit);
    public function getAllReaders();
    public function getReaderById($id);
    public function requestReader(CodeRequest $request, $id = null);
    public function deleteReader($id);
}