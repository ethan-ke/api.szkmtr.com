<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\NotificationRequest;
use App\Models\FrontendUser;
use EasyWeChat;
use EasyWeChat\Kernel\Messages\TextCard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // 推送给主管
    public int $orderStatusTwo = 2;

    // 推送给
    public int $orderStatusThree = 3;

    // 推送给
    public int $orderStatusFour = 4;

    /**
     * @param NotificationRequest $request
     * @return JsonResponse
     * @throws EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws EasyWeChat\Kernel\Exceptions\RuntimeException
     */
    public function push(NotificationRequest $request): JsonResponse
    {
        $data = $request->validated();
        $app = EasyWeChat::work();
        $messenger = $app->messenger;
        $title = match ($data['status']) {
            '1' => '您的订单' . $data['orderNo'] . '已创建，请校对订单信息。',
            '2' => '您的订单' . $data['orderNo'] . '已经到主管审核，请注意查收',
            '3' => '您的订单' . $data['orderNo'] . '已经到成本审核，请注意查收',
            '4' => '您的订单' . $data['orderNo'] . '已经到递交状态，请跟踪收付款',
        };
        $message = new TextCard([
            'title'       => $title,
            'description' => '单号: ' . $data['orderNo'] . "\r\n客户手机号: " . $data['phone'],
            'url'         => 'http://120.78.31.228/'
        ]);
        $messenger->message($message)->toUser($data['username'])->send();
        return custom_response(status_code: 201);
    }
}
