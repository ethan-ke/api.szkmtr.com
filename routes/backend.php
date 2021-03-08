<?php

use App\Http\Controllers\Backend\AuthorizationsController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\BackendUsersController;
use App\Http\Controllers\Frontend\CarouselController;
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
Route::post('authorizations', [AuthorizationsController::class, 'store'])
    ->name('authorizations.store');
// 刷新token
Route::put('authorizations/current', [AuthorizationsController::class, 'update'])
    ->name('authorizations.update');
// 删除token
Route::delete('authorizations/current', [AuthorizationsController::class, 'destroy'])
    ->name('authorizations.destroy');

// Authenticated
Route::middleware('auth:backend-api')->group(function () {
//    Route::resource('users', BackendUser::class);
    Route::get('user', [BackendUsersController::class, 'me']);
});

Route::resource('carousels', CarouselController::class);
Route::resource('orders', OrdersController::class);
Route::resource('services', ServicesController::class);
Route::get('services/{service}/details', [ServicesController::class, 'detail']);
