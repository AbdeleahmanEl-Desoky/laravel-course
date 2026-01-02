<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});


Route::get('/product', function () {
    return view('admin.product.index');
});

Route::get('/product/create', function () {
    return view('admin.product.create');
});
