<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        dd($this->resource);
        return [
            "id"             => (string) $this->resource->id,
            "service_sku_id" => $this->resource->service_sku_id,
            "amount"         => $this->resource->amount,
            "sku"            => [
                "id"         => $this->resource->sku->id,
                "service_id" => $this->resource->sku->service_id,
                "name"       => $this->resource->sku->name,
                "price"      => (float) $this->resource->sku->price,
                "service"    => [
                    "id"        => $this->resource->sku->service->id,
                    "name"      => $this->resource->sku->service->name,
                    "thumbnail" => $this->resource->sku->service->thumbnail_full
                ]
            ]
        ];
    }
}
