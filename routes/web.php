<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OfferController;

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
