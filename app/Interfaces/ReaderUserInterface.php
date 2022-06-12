<?php

namespace App\Interfaces;

use App\Http\Requests\ReaderUserRequest;

interface ReaderUserInterface
{
    public function findBy($idreader,$iduser,$status, $limit);
    public function getAllReaderUsers();
    public function getReaderUserById($id);
    public function requestReaderUser(ReaderUserRequest $request, $id = null);
    public function deleteReaderUser($id);
}