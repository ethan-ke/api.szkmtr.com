<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\ServiceDistrict
 *
 * @property int $id
 * @property int $service_id
 * @property string $name
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $sort
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceDistrictItem[] $item
 * @property-read int|null $item_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrict whereSort($value)
 */
class ServiceDistrict extends BaseModel
{

    /**
     * @return HasMany
     */
    public function item(): HasMany
    {
        return $this->hasMany(ServiceDistrictItem::class);
    }
}
