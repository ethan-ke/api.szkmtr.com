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
                    'name' => '公司注册',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '代理记账',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '工商变更',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '香港公司',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '银行开户',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '地址挂靠',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '注册商标',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '专利注册',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '出口退税',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '最新资讯',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '优惠',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
                [
                    'name' => '会员中心',
                    'status' => 1,
                    'thumbnail' => 'static/images/agent_bookkeeping.svg',
                ],
            ]
        );
    }
}
