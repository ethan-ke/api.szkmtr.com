<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceDistrictItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'banner' => $this->resource->banner_full,
            'name'   => $this->resource->name,
            'sku'    => $this->resource->sku,
            'price'  => min(array_column($this->resource->sku->toArray(), 'price')),
        ];
    }
}
