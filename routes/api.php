<?php

use App\Http\Controllers\AuthController;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    //Auth api
    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);


    //Medicine api
    Route::apiResource('medicine', 'MedicineController');


    //Medicine search api
    Route::post('search', 'SearchController');

});