<?php

use Illuminate\Http\Request;
use App\Farmers\Controllers\SearchController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {return $request->user();});
//Route::resource('/', SearchController::class);

//Route::get('/user', function (Request $request) {
//    dd($request->user());
//    return $request->user();
//});
//Route::resource('farmer', FarmerController::class);
Route::get('/farmer/water_source/{wSource}', [SearchController::class, 'search']);
