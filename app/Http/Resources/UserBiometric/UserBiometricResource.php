<?php

namespace App\Http\Resources\UserBiometric;

use Illuminate\Http\Resources\Json\JsonResource;

class UserBiometricResource extends JsonResource
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
            'idtype' => $this->idtype,
            'idbiometric' => $this->idbiometric,
            'name' => $this->name,
        ];
    }
}
