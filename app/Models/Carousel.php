<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

/**
 * App\Models\Carousel
 *
 * @property int $id
 * @property string|null $title
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $path_full
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carousel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Carousel extends Model
{
    use HasFactory;

    /**
     * @return string
     */
    public function getPathFullAttribute(): string
    {
        return env('APP_URL') . Storage::url($this->path);
    }
}
