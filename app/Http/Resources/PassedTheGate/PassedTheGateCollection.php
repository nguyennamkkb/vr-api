<?php

namespace App\Http\Resources\PassedTheGate;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\PassedTheGate\PassedTheGateResource;

class PassedTheGateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => PassedTheGateResource::collection($this->collection),
            'meta' => [
                'total' => $this->total(),
                'count' => $this->count(),
                'per_page' => $this->perPage(),
                'current_page' => $this->currentPage(),
                'total_pages' => $this->lastPage()
            ]

        ];
    }
}
