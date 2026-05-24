<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('events', EventController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('partners', PartnerController::class);
});


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/detail', function () {
//     return view('event_detail');
// });

// Route::get('/checkout', function () {
//     return view('checkout');
// });

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

// Route::get('/adminkelola', function () {
//     return view('admin.event');
// });

// Route::get('/adminlaporan', function () {
//     return view('admin.transaction');
// });