<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\loginController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\SubCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/categories',[CategoryController::class,'index'])->middleware('auth:sanctum');
Route::get('/sub/categories',[SubCategoryController::class,'index']);
Route::apiResource('products',ProductController::class);
Route::apiResource('orders',OrderController::class)->middleware('auth:sanctum');
// Route::apiResources('/product/{$product}',[ProductController::class,'index']);
