<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ERPOrder
 *
 * @method static Builder|ERPOrder newModelQuery()
 * @method static Builder|ERPOrder newQuery()
 * @method static Builder|ERPOrder orderStatus(string $status)
 * @method static Builder|ERPOrder query()
 * @mixin \Eloquent
 */
class ERPOrder extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'app_orders_all';

    public function scopeOrderStatus(Builder $query, string $status): Builder
    {
        return $query->where('orderStatus', '>=', (string) $status);
    }
}
