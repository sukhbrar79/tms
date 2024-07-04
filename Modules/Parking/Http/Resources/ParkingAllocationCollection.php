<?php

namespace Modules\Parking\Http\Resources;

use Illuminate\Http\Request;
use Modules\Parking\Http\Resources\ParkingResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ParkingAllocationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            $this->collection
        ];
    }
}
