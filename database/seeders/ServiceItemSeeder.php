<?php

namespace Database\Seeders;

use App\Models\ServiceItem;
use Illuminate\Database\Seeder;

class ServiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceItem::insert(
            [
                [
                    'service_id' => 1,
                    'name'       => '注册深圳公司',
                    'status'     => 1,
                    'thumbnail'  => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'service_id' => 1,
                    'name'       => '注册前海公司',
                    'status'     => 1,
                    'thumbnail'  => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'service_id' => 1,
                    'name'       => '注册香港公司',
                    'status'     => 1,
                    'thumbnail'  => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'service_id' => 2,
                    'name'       => '小规模代理记账',
                    'status'     => 1,
                    'thumbnail'  => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'service_id' => 2,
                    'name'       => '一般纳税人记账',
                    'status'     => 1,
                    'thumbnail'  => 'static/images/agent_bookkeeping.svg',
                ],
            ]
        );
    }
}
