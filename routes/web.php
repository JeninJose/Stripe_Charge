<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('/');

Route::get('/auth/login', [LoginController::class, 'index'])->name('/auth/login');

Route::post('/auth/login', [LoginController::class, 'authenticate']);

Route::get('/auth/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::get('/product', [ProductController::class, 'index']);

    Route::get('/product/detail/{id}', [ProductController::class, 'detail']);

    Route::post('/payment/charge', [PaymentController::class, 'charge']);

});


