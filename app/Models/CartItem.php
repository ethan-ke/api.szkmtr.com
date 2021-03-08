<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends BaseModel
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function sku(): BelongsTo
    {
        return $this->belongsTo(ServiceDistrictItemSku::class, 'service_district_item_sku_id', 'id');
    }
}
