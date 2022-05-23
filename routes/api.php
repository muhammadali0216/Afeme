<?php

use App\Http\Controllers\Site\ClientController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Http\Request;
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

Route::middleware('api')->get('/client', function (Request $request) {
    return $request->client();
});

Route::middleware('api')->group( function(){
    Route::resource('client', ClientController::class);
    Route::resource('product', ProductController::class);
    
});

Route::post('login',[ClientController::class,  'create']);
Route::post('register',[ClientController::class,  'store']);