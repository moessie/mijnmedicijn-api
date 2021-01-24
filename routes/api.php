<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SearchController;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    //Auth api
    Route::post('signup', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);


    //Medicine api
    Route::apiResource('medicine', MedicineController::class);


    //Medicine search api
    Route::post('search', SearchController::class);

});