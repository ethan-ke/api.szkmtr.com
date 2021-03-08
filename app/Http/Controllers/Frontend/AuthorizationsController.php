<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use App\Http\Requests\Frontend\AuthorizationRequest;
use App\Models\FrontendUser;
use Auth;
use EasyWeChat;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;

class AuthorizationsController extends MainController
{
    /**
     * @param AuthorizationRequest $request
     * @return JsonResponse
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException|AuthenticationException
     */
    public function store(AuthorizationRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $app = EasyWeChat::miniProgram();
        $data = $app->auth->session($validated['code']);
        $weappUser = $app->encryptor->decryptData($data['session_key'], $validated['iv'], $validated['encryptedData']);
        $user = FrontendUser::where('weapp_openid', $data['openid'])->first();
        if ($user instanceof FrontendUser) {
            $token = Auth::fromUser($user);
        } else {
            $item = [
                'phone'        => $weappUser['purePhoneNumber'],
                'weapp_openid' => $data['openid'],
            ];
            $newUser = FrontendUser::create($item);
            $token = Auth::fromUser($newUser);
        }
        return $this->respondWithToken($token);
    }

    /**
     * @return JsonResponse
     */
    public function update(): JsonResponse
    {
        $token = Auth::refresh();
        return $this->respondWithToken($token);
    }

    /**
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        Auth::logout();
        return custom_response(null, status_code: 200);
    }
}
