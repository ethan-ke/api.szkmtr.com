<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ERPOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
//        $status = match($this->resource->orderStatus) {
//            '4' => '待处理',
//            '6' => '已完成',
//        };
        return [
            'id'                 => $this->resource->id,
            'ordernum'           => $this->resource->ordernum,
            'business_name'      => $this->resource->business_name,
            'price'              => sprintf("%.2f", $this->resource->price),
            'orderStatus'        => $this->resource->orderStatus,
//            'orderStatus'      => $status,
            'customer_aliases'   => $this->resource->customer_aliases,
            'customer_phone'     => $this->resource->customer_phone,
            'customer_mobile'    => $this->resource->customer_mobile,
            'companyname'        => $this->resource->companyname,
            'ordername'          => $this->resource->ordername,
            'salesman_contact'   => $this->resource->salesman_contact,
            'salesman_contactcn' => $this->resource->salesman_contactcn,
        ];
    }
}
