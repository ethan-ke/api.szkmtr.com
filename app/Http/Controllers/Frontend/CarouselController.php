<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarouselResource;
use App\Models\Carousel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $item = Carousel::get(['title', 'path']);
        return custom_response(CarouselResource::collection($item));
    }
}
