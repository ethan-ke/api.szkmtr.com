<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Storage;

/**
 * App\Models\ServiceDistrictItem
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $service_id
 * @property string $name
 * @property string $thumbnail
 * @property int $status
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereUpdatedAt($value)
 * @property int $service_district_id
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereServiceDistrictId($value)
 * @property string $banner
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceDistrictItem whereDescription($value)
 * @property-read \App\Models\ServiceDistrict $district
 * @property-read string $banner_full
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceDistrictItemSku[] $sku
 * @property-read int|null $sku_count
 */
class ServiceDistrictItem extends BaseModel
{

    /**
     * @return BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(ServiceDistrict::class, 'service_district_id');
    }

    /**
     * @return HasMany
     */
    public function sku(): HasMany
    {
        return $this->hasMany(ServiceDistrictItemSku::class);
    }

    /**
     * @return string
     */
    public function getBannerFullAttribute(): string
    {
        return env('APP_URL') . Storage::url($this->banner);
    }
}
