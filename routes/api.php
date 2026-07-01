<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BacSiController;
use App\Http\Controllers\LeTanController;
use Illuminate\Support\Facades\Route;

Route::post('admin/login', [AdminController::class, 'loginAdmin']);
Route::group(['prefix' => 'admin','middleware' => 'AdminMiddleware'], function () {
    Route::get('/test', [AdminController::class, 'test']);
     Route::get('/check-token', [AdminController::class, 'checkTokenAdmin']);

});

// API BAC SI
Route::post('bac-si/login', [BacSiController::class, 'loginBacSi']);
Route::post('bac-si/register', [BacSiController::class, 'registerBacSi']);
Route::post('bac-si/kich-hoat', [BacSiController::class, 'kichHoatBacSi']);
Route::group(['prefix' => '/bac-si','middleware' => 'BacSiMiddleware'], function () {
    Route::get('/check-token', [BacSiController::class, 'checkTokenBacSi']);
    // Logout
    Route::post('logout', [BacSiController::class, 'logoutBacSi']);
});

// API LE TAN
Route::post('le-tan/login', [LeTanController::class, 'loginLeTan']);
Route::group(['prefix' => '/le-tan','middleware' => 'LeTanMiddleware'], function () {
    // Logout và check token
    Route::post('logout', [LeTanController::class, 'logoutLeTan']);
    Route::get('/check-token', [LeTanController::class, 'checkTokenLeTan']);
    Route::get('profile/data', [LeTanController::class, 'getProfile']);
    Route::get('infomation/data', [LeTanController::class, 'getinfomation']);
    Route::get('lich-lam/data', [LeTanController::class, 'getLichLam']);

});
