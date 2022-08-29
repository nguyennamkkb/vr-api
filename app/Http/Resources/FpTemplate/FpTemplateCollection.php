<?php

namespace App\Http\Resources\FpTemplate;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FpTemplateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
