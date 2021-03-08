<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceDetailResource;
use App\Models\Service;
use App\Models\ServiceDistrict;
use App\Models\ServiceDistrictItem;
use Illuminate\Http\JsonResponse;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $field = ['id', 'name', 'thumbnail', 'sign'];
        $item = Service::where('status', Service::STATUS_ENABLE)->get($field);
        return custom_response($item);
    }

//    /**
//     * Display a listing of the resource.
//     *
//     * @param Service $service
//     * @return JsonResponse
//     */
//    public function show(Service $service): JsonResponse
//    {
//        $item = $service;
//        return custom_response(ServiceDetailResource::make($item));
//    }

    /**
     * Display a listing of the resource.
     *
     * @param Service $service
     * @return JsonResponse
     */
    public function district(Service $service): JsonResponse
    {
        $item = $service->load('district.item');
        return custom_response($item->district);
    }

    /**
     * Display a listing of the resource.
     *
     * @param ServiceDistrict $district
     * @return JsonResponse
     */
    public function item(ServiceDistrict $district): JsonResponse
    {
        return custom_response($district->item);
    }

    /**
     * Display a listing of the resource.
     *
     * @param ServiceDistrictItem $item
     * @return JsonResponse
     */
    public function districtItemDetail(ServiceDistrictItem $item): JsonResponse
    {
        return custom_response(ServiceDetailResource::make($item->load(['district', 'sku'])));
    }
}
