<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeApplianceController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

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

Route::resource('appliances', HomeApplianceController::class);
Route::resource('brands', BrandController::class);
Route::post('/images/upload', [ImageController::class, 'upload']);
