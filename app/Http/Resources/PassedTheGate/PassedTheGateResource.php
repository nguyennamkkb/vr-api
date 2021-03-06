<?php

namespace App\Http\Resources\PassedTheGate;

use Illuminate\Http\Resources\Json\JsonResource;

class PassedTheGateResource extends JsonResource
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
            'reader' => $this->idreader,
            'user' => $this->iduser,
            'time' => $this->time,
        ];
    }
}
