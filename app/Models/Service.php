<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Storage;

/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $sign
 * @property string $thumbnail
 * @property int $sort
 * @property-read \App\Models\ServiceDetail|null $detail
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceDistrictItem[] $item
 * @property-read int|null $item_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereThumbnail($value)
 * @property string $banner
 * @property-read string $banner_full
 * @property-read string $thumbnail_full
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceSku[] $sku
 * @property-read int|null $sku_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereBanner($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceDistrict[] $district
 * @property-read int|null $district_count
 */
class Service extends BaseModel
{
    use HasFactory;

    public const STATUS_ENABLE = 1;

    /**
     * @return HasMany
     */
    public function district(): HasMany
    {
        return $this->hasMany(ServiceDistrict::class);
    }

    /**
     * @return string
     */
    public function getThumbnailFullAttribute(): string
    {
        return env('APP_URL') . Storage::url($this->thumbnail);
    }
}
