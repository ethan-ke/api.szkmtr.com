<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * App\Models\BackendUser
 *
 * @property int $id
 * @property string|null $nickname
 * @property string $username
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereUsername($value)
 * @mixin \Eloquent
 */
class BackendUser extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $hidden = [
        'password'
    ];

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
}
