<?php

namespace Database\Seeders;

namespace Database\Seeders;

use App\Models\ServiceDistrictItemSku;
use Illuminate\Database\Seeder;

class ServiceDistrictItemSkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceDistrictItemSku::insert(
            [
                [
                    'name'                     => '标准服务',
                    'price'                    => 999.99,
                    'service_district_item_id' => 1,
                    'description'              => '<div class="item">
                    <h3>基本服务</h3>
                    <p>我们向当地商标局提交您的商标申请</p>
                    <ul>
                        <li class="strong">商标基本查询</li>
                        <li>我们对您的申请商标进行点对点直接查询，分析潜在的驳回风险。</li>
                        <li class="strong">综合商标查询优惠</li>
                        <li>如果您需要对近似、竞争商标进行更全面的排查，请提供更加全面的信息</li>
                    </ul>
                    <a href="/#index-contact">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '全面服务',
                    'price'                    => 1499.99,
                    'service_district_item_id' => 1,
                    'description'              => '<div class="item">
                    <h3>全面服务</h3>
                    <p>除了包括基本服务，另涵盖：</p>
                    <ul>
                        <li>商标转让协议</li>
                        <li>使商标持有人合法将商标权转让给第三方</li>
                        <li>提交商标申请的电子复印件，方便下载保存</li>
                        <li>企划建议–试用期14天* </li>
                    </ul>
                    <a href="/#index-contact" class="layui-bg-red">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '标准服务',
                    'price'                    => 999.99,
                    'service_district_item_id' => 2,
                    'description'              => '<div class="item">
                    <h3>基本服务</h3>
                    <p>我们向当地商标局提交您的商标申请</p>
                    <ul>
                        <li class="strong">商标基本查询</li>
                        <li>我们对您的申请商标进行点对点直接查询，分析潜在的驳回风险。</li>
                        <li class="strong">综合商标查询优惠</li>
                        <li>如果您需要对近似、竞争商标进行更全面的排查，请提供更加全面的信息</li>
                    </ul>
                    <a href="/#index-contact">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '全面服务',
                    'price'                    => 1499.99,
                    'service_district_item_id' => 2,
                    'description'              => '<div class="item">
                    <h3>全面服务</h3>
                    <p>除了包括基本服务，另涵盖：</p>
                    <ul>
                        <li>商标转让协议</li>
                        <li>使商标持有人合法将商标权转让给第三方</li>
                        <li>提交商标申请的电子复印件，方便下载保存</li>
                        <li>企划建议–试用期14天* </li>
                    </ul>
                    <a href="/#index-contact" class="layui-bg-red">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '标准服务',
                    'price'                    => 999.99,
                    'service_district_item_id' => 3,
                    'description'              => '<div class="item">
                    <h3>基本服务</h3>
                    <p>我们向当地商标局提交您的商标申请</p>
                    <ul>
                        <li class="strong">商标基本查询</li>
                        <li>我们对您的申请商标进行点对点直接查询，分析潜在的驳回风险。</li>
                        <li class="strong">综合商标查询优惠</li>
                        <li>如果您需要对近似、竞争商标进行更全面的排查，请提供更加全面的信息</li>
                    </ul>
                    <a href="/#index-contact">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '全面服务',
                    'price'                    => 1499.99,
                    'service_district_item_id' => 3,
                    'description'              => '<div class="item">
                    <h3>全面服务</h3>
                    <p>除了包括基本服务，另涵盖：</p>
                    <ul>
                        <li>商标转让协议</li>
                        <li>使商标持有人合法将商标权转让给第三方</li>
                        <li>提交商标申请的电子复印件，方便下载保存</li>
                        <li>企划建议–试用期14天* </li>
                    </ul>
                    <a href="/#index-contact" class="layui-bg-red">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '标准服务',
                    'price'                    => 999.99,
                    'service_district_item_id' => 4,
                    'description'              => '<div class="item">
                    <h3>基本服务</h3>
                    <p>我们向当地商标局提交您的商标申请</p>
                    <ul>
                        <li class="strong">商标基本查询</li>
                        <li>我们对您的申请商标进行点对点直接查询，分析潜在的驳回风险。</li>
                        <li class="strong">综合商标查询优惠</li>
                        <li>如果您需要对近似、竞争商标进行更全面的排查，请提供更加全面的信息</li>
                    </ul>
                    <a href="/#index-contact">了解更多</a>
                </div>',
                ],
                [
                    'name'                     => '全面服务',
                    'price'                    => 1499.99,
                    'service_district_item_id' => 4,
                    'description'              => '<div class="item">
                    <h3>全面服务</h3>
                    <p>除了包括基本服务，另涵盖：</p>
                    <ul>
                        <li>商标转让协议</li>
                        <li>使商标持有人合法将商标权转让给第三方</li>
                        <li>提交商标申请的电子复印件，方便下载保存</li>
                        <li>企划建议–试用期14天* </li>
                    </ul>
                    <a href="/#index-contact" class="layui-bg-red">了解更多</a>
                </div>',
                ],
            ]
        );
    }
}
