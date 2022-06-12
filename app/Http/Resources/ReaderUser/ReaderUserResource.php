<?php

namespace App\Http\Resources\ReaderUser;

use Illuminate\Http\Resources\Json\JsonResource;

class ReaderUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'idreader' => $this->idreader,
            'iduser' => $this->iduser,

        ];
    }
}
