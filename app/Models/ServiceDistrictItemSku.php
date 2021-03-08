<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ServiceDistrictItemSku
 *
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $service_district_item_id
 * @property string $name
 * @property string $price
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku whereServiceDistrictItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItemSku whereUpdatedAt($value)
 */
class ServiceDistrictItemSku extends BaseModel
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
