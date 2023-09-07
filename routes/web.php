<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ContactController;

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

Route::redirect('/', '/index');

Route::get('/index', [IndexController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/rooms', [RoomController::class, 'show']);

Route::get('/offers', [OfferController::class, 'show']);

Route::controller(DetailsController::class)->group(function () {
    Route::get('/details/{id}', 'show');
    Route::post('/details/{id}', 'store');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'show');
    Route::post('/contact', 'store');
});
