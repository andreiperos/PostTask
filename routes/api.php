<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Create item route
Route::post('/shop', 'App\Http\Controllers\ShopController@createItem');

//Show item list
Route::get('/shop', 'App\Http\Controllers\ShopController@getAllItem');

// Show item by Id
Route::get('/shop/{id}', 'App\Http\Controllers\ShopController@getItemById');

// Update item by Id
Route::put('/shop/{id}','App\Http\Controllers\ShopController@updateItemById');

// Delete item By Id
Route::delete('/shop/{id}','App\Http\Controllers\ShopController@deleteItemById');