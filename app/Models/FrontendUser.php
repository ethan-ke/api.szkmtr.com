<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * App\Models\FrontendUser
 *
 * @property int $id
 * @property string|null $nickname
 * @property string|null $phone
 * @property string|null $avatar
 * @property string $weapp_openid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CartItem[] $cart
 * @property-read int|null $cart_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FrontendUserContact[] $contact
 * @property-read int|null $contact_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $order
 * @property-read int|null $order_count
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUser whereWeappOpenid($value)
 * @mixin \Eloquent
 */
class FrontendUser extends Authenticatable implements JWTSubject
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

    /**
     * @return HasMany
     */
    public function contact(): HasMany
    {
        return $this->hasMany(FrontendUserContact::class);
    }

    /**
     * @return HasMany
     */
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @return HasMany
     */
    public function cart(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
}
