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

Route::get('/get-users', [App\Http\Controllers\UserController::class, 'index'])->name('getUsers');
Route::post('/store-user', [App\Http\Controllers\UserController::class, 'storeUserData'])->name('storeUser');
Route::get('/user_edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user_update', [App\Http\Controllers\UserController::class, 'update']);




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
