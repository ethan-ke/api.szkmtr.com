<?php

namespace App\Http\Resources;

use App\Models\Order;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;

class OrderResource extends JsonResource
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
            'id'               => $this->resource->id,
            'no'               => $this->resource->no,
            'total_amount'     => $this->resource->total_amount,
            'paid_at'          => $this->resource->paid_at,
            'ship_status'      => $this->resource->ship_status,
            'ship_status_text' => Order::$statusMap[$this->resource->ship_status],
            'contact'          => $this->resource->contact,
            'created_at'       => $this->resource->created_at->toDateTimeString(),
            'service_snapshot' => $this->convertLink($this->resource->service_snapshot)
        ];
    }

    /**
     * @param array $items
     * @return array
     */
    public function convertLink(array $items): array
    {
        $data = [];
        foreach ($items as $key => $item) {
            $item['service']['thumbnail'] = env('APP_URL') . Storage::url($item['service']['thumbnail']);
            $data[$key] = $item;
        }
        return $data;
    }
}
