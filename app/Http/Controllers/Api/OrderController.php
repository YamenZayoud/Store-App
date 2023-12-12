<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Resources\ordersResource;

class OrderController extends Controller
{
    use ApiResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders =Order::with('product')->get();
        return $this->apiResponse( ordersResource::collection($orders),'this is all orders',200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return $this->apiResponse(new ordersResource($order),'this is  order',200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update([
            'product_id' => $request->id??$order->id,
            'user_id'=>$request->user_id??$order->user_id,
            'quantity'=> $request->quantity??$order->quantity
          ]);

          return$this->apiResponse(new ordersResource($order),'this is  order',200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
      $order->delete();
      return$this->apiResponse([],'this   order is deleted',200);
    }
}
