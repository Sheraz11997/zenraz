<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Farmers\Controllers\ContractController;
use App\Farmers\Controllers\FarmerController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SContractController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Area_Structure;

Route::get('/', function () {
    return view('layouts.content');
});
// route for user profile
Route::resource('user', UserController::class);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::post('user/{id}', [UserController::class, 'update']);
Route::get('/delete/user/{id}', [UserController::class, 'destroy']);
Route::get('/view/user/{id}', [UserController::class, 'view']);
Route::post('/upload/image', [UserController::class, 'upload']);
// routes for area structure
Route::resource('area_structure', Area_Structure::class);
Route::get('/area/view/{id}', [Area_Structure::class, 'view']);
Route::GET('/fetch',  [Area_Structure::class, 'user']);

Route::resource('devices', DeviceController::class);
Route::get('devices/{id}', [DeviceController::class, 'destroy']);
Route::get('devices/{id}/edit', [DeviceController::class, 'edit']);
Route::post('devices/{id}', [DeviceController::class, 'update']);

Route::resource('farmer', FarmerController::class);
Route::resource('contract', ContractController::class);

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Auth::routes();
});

Route::get('/home',  [HomeController::class, 'index'])->name('home');

Route::prefix('users')->group(base_path('app/Users/Routes/web.php'));
