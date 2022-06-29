<?php

namespace App\Interfaces;

use App\Http\Requests\PassedTheGateRequest;

interface PassedTheGateInterface
{
    public function findBy($idreader,$iduser,$time,$status, $limit);
    public function getAllPassedTheGates();
    public function getPassedTheGateById($id);
    public function requestPassedTheGate(PassedTheGateRequest $request, $id = null);
    public function deletePassedTheGate($id);
    public function seeTimeSheet();
    public function updatepassedthegate($request);
}