<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/task/{type}/{task}', [ApiController::class, 'retain']);


Route::group(['middleware' => 'cors'], function () {
    // Define your API routes here
    Route::get('/task/{type}/{task}', 'ApiController@retain');
});

