<?php

use App\Http\Controllers\Frontend\AuthorizationsController;
use App\Http\Controllers\Frontend\CarouselController;
use App\Http\Controllers\Frontend\CartItemController;
use App\Http\Controllers\Frontend\ContactInformationController;
use App\Http\Controllers\Frontend\FrontendUsersController;
use App\Http\Controllers\Frontend\NotificationController;
use App\Http\Controllers\Frontend\OrdersController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ServiceDistrictItemController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// 登录
Route::post('weapp/authorizations', [AuthorizationsController::class, 'store']);
// 刷新token
Route::put('authorizations/current', [AuthorizationsController::class, 'update']);
// 删除token
Route::delete('authorizations/current', [AuthorizationsController::class, 'destroy']);
Route::get('carousels', [CarouselController::class, 'index']);
Route::get('services', [ServiceController::class, 'index']);
//Route::get('services/{service}', [ServiceController::class, 'show']);
Route::get('services/{service}/district', [ServiceController::class, 'district']);

// Get item detail
Route::get('services/district-item/{item}', [ServiceDistrictItemController::class, 'show']);
Route::get('services/district/{district}/item', [ServiceController::class, 'item']);

// Order status push
Route::post('notification/orders', [NotificationController::class, 'push']);

// Authenticated
Route::middleware('auth:frontend-api')->group(function () {
    Route::get('user', [FrontendUsersController::class, 'me']);
    Route::resource('users/contacts', ContactInformationController::class);
    Route::post('orders/multiple', [OrdersController::class, 'multiple']);
    Route::resource('orders', OrdersController::class);
    Route::get('cart/amount', [CartItemController::class, 'amount']);
    Route::resource('cart', CartItemController::class);
});
