<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineTrackerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReminderController;


Route::group([

    'middleware' => 'api',

], function ($router) {


    Route::group(['prefix' => 'auth'], function () {
        Route::post('signup', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class,'login']);
        Route::post('logout', [AuthController::class,'logout']);
        Route::post('refresh', [AuthController::class,'refresh']);
        Route::post('me', [AuthController::class,'me']);
    });
    //Auth api



    //Medicine api
    Route::apiResource('medicine', MedicineController::class);


    //Medicine search api
    Route::get('search/{query}', SearchController::class);

    //Reminder Api
    Route::apiResource('reminder', ReminderController::class);


    //MedicineTracker Api
    Route::apiResource('tracker', MedicineTrackerController::class);


});