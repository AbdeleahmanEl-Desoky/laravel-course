<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {

    Route::resource('user', UserController::class);
    Route::group(['prefix'=>'product',], function () {
        
        Route::get('/', function () {
            return view('welcome');
        });

        Route::post('/', function () {
            return view('welcome'); //create
        });

        Route::put('/', function () {
            return view('welcome'); //update
        });

        Route::patch('/', function () {
            return view('welcome'); //update status
        });

        Route::delete('/', function () {
            return view('welcome'); //delete
        });
    });

    // Your routes here
});
