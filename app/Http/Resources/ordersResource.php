<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ordersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'     =>$this->id,
            'peoduct'=>new ProductResource($this->product),
            'user'   => new UserResource($this->user),
            'quantity' => $this->quantity
        ];
    }
}
