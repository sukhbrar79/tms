<?php

namespace Modules\Parking\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParkingResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'spot_number' => $this->spot_number,
            'spot_type' => $this->spot_type,
            'location' => $this->location
        ];
    }
}
