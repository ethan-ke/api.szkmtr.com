<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use App\Http\Requests\Frontend\MultipleOrderRequest;
use App\Http\Requests\Frontend\OrderRequest;
use App\Http\Resources\ERPOrderResource;
use App\Models\CartItem;
use App\Models\ERPOrder;
use App\Models\Order;
use DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Log;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class OrdersController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $fields = ['id', 'ordernum', 'business_name', 'price', 'orderStatus', 'customer_aliases', 'customer_phone', 'customer_mobile', 'companyname', 'ordername', 'salesman_contact', 'salesman_contactcn'];

        $item = QueryBuilder::for(ERPOrder::select($fields))
            ->where('customer_mobile', $this->user()->phone)
            ->orWhere('salesman_mobile', $this->user()->phone)
            ->allowedFilters([
                AllowedFilter::exact('f_isclearing'),
                AllowedFilter::exact('s_isclearing'),
                AllowedFilter::scope('order_status'),
            ])
            ->orderByDesc('id')
            ->paginate(15);
        return custom_response(ERPOrderResource::collection($item)->response()->getData());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OrderRequest $request
     * @return JsonResponse
     * @throws \Throwable
     */
    public function store(OrderRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $service_sku = ServiceSku::find($validated['service_sku_id'], [
            'id',
            'service_id',
            'name',
            'price'
        ])->load('service:id,name,thumbnail')->toArray();
        $price = $service_sku['price'];
        return $this->handle($validated['contact_id'], [$service_sku], $price);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MultipleOrderRequest $request
     * @return JsonResponse
     * @throws \Throwable
     */
    public function multiple(MultipleOrderRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $cart_id = explode(',', $validated['cart_id']);
        $cartItem = CartItem::with(['sku:id,service_id,name,price', 'sku.service:id,name,thumbnail'])->whereIn('id', $cart_id)->get();
        $price = $cartItem->sum(fn ($item) => $item->amount * $item->sku->price);
        $service_snapshot = $cartItem->map(fn ($item) => $item->sku)->toArray();
        return $this->handle($validated['contact_id'], $service_snapshot, $price);
    }

    /**
     * @param int $contact_id
     * @param array $service_snapshot
     * @param float $price
     * @return JsonResponse
     * @throws \Throwable
     */
    public function handle(int $contact_id , array $service_snapshot, float $price): JsonResponse
    {
        $order = [
            'contact_id'           => $contact_id,
            'service_snapshot'     => $service_snapshot,
            'total_amount'         => $price,
        ];
        try {
            DB::beginTransaction();
            $this->user()->order()->create($order);
            DB::commit();
            return custom_response(null, '10108');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
        DB::rollBack();
        return custom_response(null, '10109');
    }

    /**
     * Display a listing of the resource.
     * @param ERPOrder $order
     * @return JsonResponse
     */
    public function show(ERPOrder $order): JsonResponse
    {
        $item = $order;
        return custom_response(ERPOrderResource::make($item));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Order $order): JsonResponse
    {
        $order->delete();
        return custom_response(null, status_code: 204);
    }
}
