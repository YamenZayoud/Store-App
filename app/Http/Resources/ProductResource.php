<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\SubCategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'sub-category'=> new SubCategoryResource($this->subCategory),
            'image'       => $this->image,
            'price'       =>$this->price,
            'evaluation'  => $this->eval,
            'discount'    => $this->discount

        ];
    }
}
