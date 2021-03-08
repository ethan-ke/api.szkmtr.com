<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\MainController;
use App\Http\Requests\Backend\UserRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class BackendUsersController
 * @package App\Http\Controllers\Backend
 */
class BackendUsersController extends MainController
{
    /**
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        $user = $this->user();
        return custom_response($user);
    }

    /**
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function update(UserRequest $request): JsonResponse
    {
        $attributes = $request->validated();
        $this->user()->update($attributes);
        return custom_response($this->user());
    }
}
