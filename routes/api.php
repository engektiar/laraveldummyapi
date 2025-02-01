<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DummyControler;
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



Route::get('/data', [DummyControler::class, 'getdate']);

Route::get('/onlyviewdata', [DeviceController::class, 'onlyviewdata']);

Route::get('/list/{id?}', [DeviceController::class, 'list']);

Route::get('/listparams/{id?}', [DeviceController::class, 'listparams']);

