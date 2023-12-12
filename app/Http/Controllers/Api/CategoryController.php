<?php

namespace App\Http\Controllers\Api;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{

    use ApiResponseTrait;
    /**
     * Display a listing of the resource.
     */

    public function index( )
    {
        $category = Category::all();
        return $this->apiResponse(CategoryResource::collection($category),'this is all category',200);
    }


}
