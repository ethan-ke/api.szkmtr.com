<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use App\Http\Requests\Frontend\CartItemRequest;
use App\Http\Requests\Frontend\GetTheTotalPriceRequest;
use App\Http\Resources\CartItemResource;
use App\Models\CartItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CartItemController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $item = QueryBuilder::for($this->user()->cart())
            ->with(['sku:id,service_district_item_id,name,price', 'sku.service:id,name,thumbnail'])
            ->allowedFilters([AllowedFilter::exact('id')])
            ->orderByDesc('id')
            ->get();
        return custom_response(CartItemResource::collection($item));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CartItemRequest $request
     * @return JsonResponse
     */
    public function store(CartItemRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $service_sku_id = $validated['service_sku_id'];
        $cartItem = CartItem::where('service_sku_id', $service_sku_id)->first();
        if ($cartItem instanceof CartItem) {
            $cartItem->increment('amount');
        } else {
            $this->user()->cart()->create($validated);
        }
        return custom_response(null, '10101');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CartItem $item
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(CartItem $item): JsonResponse
    {
        $item->delete();
        return custom_response(null, status_code: 204);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function amount(GetTheTotalPriceRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $cart = json_decode($validated['id']);
        $cartItem = CartItem::with('sku')->whereIn('id', $cart)->get();
        $price = $cartItem->sum(fn ($item) => $item->amount * $item->sku->price);
        $formatted = sprintf("%.2f", $price);
        return custom_response(['price' => $formatted]);
    }
}
