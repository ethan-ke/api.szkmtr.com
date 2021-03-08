<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert(
            [
                [
                    'name'      => '商标',
                    'sign'      => 'trademark',
                    'status'    => 1,
                    'thumbnail' => 'static/images/service-icon.svg',
                ],
                [
                    'name'      => '版权登记',
                    'sign'      => 'copyright-registration',
                    'status'    => 1,
                    'thumbnail' => 'static/images/service-icon.svg',
                ],
                [
                    'name'      => '专利申请',
                    'sign'      => 'patent-application',
                    'status'    => 1,
                    'thumbnail' => 'static/images/service-icon.svg',
                ],
                [
                    'name'      => '公司注册',
                    'sign'      => 'patent-application',
                    'status'    => 1,
                    'thumbnail' => 'static/images/service-icon.svg',
                ],
                [
                    'name'      => '法务咨询',
                    'sign'      => 'legal-advice',
                    'status'    => 1,
                    'thumbnail' => 'static/images/service-icon.svg',
                ],
            ]
        );
    }
}
