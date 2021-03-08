<?php

namespace Database\Seeders;

use App\Models\ServiceDistrict;
use Illuminate\Database\Seeder;

class ServiceDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceDistrict::insert([
            [
                'service_id' => 1,
                'name'       => '中国公司业务',
                'status'     => 1,
                'sort'       => 0,
            ],
            [
                'service_id' => 1,
                'name'       => '香港公司业务',
                'status'     => 1,
                'sort'       => 0,
            ],
            [
                'service_id' => 1,
                'name'       => '英国公司业务',
                'status'     => 1,
                'sort'       => 0,
            ],
        ]);
    }
}
