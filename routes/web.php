<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'categories','as'=>'categories.'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    // Route::get('{id}', [CategoryController::class, 'show'])->name('show');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('{id}', [CategoryController::class, 'update'])->name('update');
});
