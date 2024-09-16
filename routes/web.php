<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sellerController;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\saleController;

Route::prefix('seller')->group(function () {
    Route::get('/login', [sellerController::class, 'index'])->name('login');
    Route::post('/section', [sellerController::class, 'entering'])->name('entering');
    route::post('/logout', [sellerController::class, 'logout'])->name('logout');


});

Route::prefix('vehicles')->group(function () {
    Route::get('/', [vehicleController::class, 'index'])->name('viewvehicles');

});

Route::prefix('home')->group(function () {
    Route::get('/seller', [homeController::class, 'index'])->name('homeMain');
});

Route::prefix('createCustomer')->group(function () {
    Route::get('/', [customersController::class, 'index'])->name('createCustomer');
    Route::post('/creatingCustomer', [customersController::class, 'create'])->name('creatingCustomer');
});

Route::prefix('sale')->group(function () {
    Route::get('/', [saleController::class, 'index'])->name('sale');
    Route::post('/', [saleController::class, 'create'])->name('creatingSale');

});
