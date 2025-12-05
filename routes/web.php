<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

################# Products-Start ####################
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
################# Products-End ####################

################# Category-Start ####################
Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
################# Category-end ####################



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
