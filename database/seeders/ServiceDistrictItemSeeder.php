<?php

namespace Database\Seeders;

use App\Models\ServiceDistrictItem;
use Illuminate\Database\Seeder;

class ServiceDistrictItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceDistrictItem::insert(
            [
                [
                    'service_district_id' => 1,
                    'name'                => '商标申请',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
                [
                    'service_district_id' => 1,
                    'name'                => '商标出售',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
                [
                    'service_district_id' => 1,
                    'name'                => '商标修订',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
                [
                    'service_district_id' => 2,
                    'name'                => '商标申请',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
                [
                    'service_district_id' => 2,
                    'name'                => '商标出售',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
                [
                    'service_district_id' => 2,
                    'name'                => '理账',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
                [
                    'service_district_id' => 3,
                    'name'                => '商标申请',
                    'thumbnail'           => 'static/images/agent_bookkeeping.svg',
                    'banner'              => 'static/images/domestic-trademark.png',
                    'status'              => 1,
                ],
            ]
        );
    }
}
