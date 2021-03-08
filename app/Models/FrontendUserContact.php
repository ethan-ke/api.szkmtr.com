<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\FrontendUserContact
 *
 * @property int $id
 * @property int $frontend_user_id
 * @property string $name
 * @property int $sex
 * @property string $mobile
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereFrontendUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $phone
 * @method static \Illuminate\Database\Eloquent\Builder|FrontendUserContact wherePhone($value)
 */
class FrontendUserContact extends BaseModel
{
    use HasFactory;
}
