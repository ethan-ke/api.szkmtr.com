<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $item = Service::where('status', Service::STATUS_ENABLE)->get(['name', 'thumbnail']);
        return custom_response($item);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Service $service
     * @return JsonResponse
     */
    public function item(Service $service): JsonResponse
    {
        $item = $service->item()->where('status', Service::STATUS_ENABLE)->get(['name', 'thumbnail']);
        return custom_response($item);
    }
}
