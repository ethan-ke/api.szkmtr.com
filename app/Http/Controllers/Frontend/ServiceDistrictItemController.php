<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceDistrictItemResource;
use App\Models\ServiceDistrictItem;
use Illuminate\Http\JsonResponse;

class ServiceDistrictItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @param ServiceDistrictItem $item
     * @return JsonResponse
     */
    public function show(ServiceDistrictItem $item): JsonResponse
    {
        return custom_response(ServiceDistrictItemResource::make($item));
    }
}
