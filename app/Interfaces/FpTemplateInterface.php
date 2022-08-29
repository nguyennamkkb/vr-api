<?php

namespace App\Interfaces;

use App\Http\Requests\FpTemplateRequest;

interface FpTemplateInterface
{
    public function findBy($idReader,$status,$limit);
    public function getAllFpTemplates();
    public function getFpTemplateById($id);
    public function requestFpTemplate(FpTemplateRequest $request, $id = null);
    public function deleteFpTemplate($id);
    public function getIdReaderbyid7462($id7462);
    public function getBackupFPTemplate($idReader, $offset);
}