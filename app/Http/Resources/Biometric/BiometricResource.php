<?php

namespace App\Http\Resources\Biometric;

use Illuminate\Http\Resources\Json\JsonResource;

class BiometricResource extends JsonResource
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
            'data' => $this->data,
        ];
    }
}
