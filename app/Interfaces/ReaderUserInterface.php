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
    public function getAccessDoor($fpIndex,$readercode);
    public function getAccessDoorByCard($vid,$readercode);
    public function addNewUserBioReader($userName, $vID, $fpIndex, $readerCode);
}