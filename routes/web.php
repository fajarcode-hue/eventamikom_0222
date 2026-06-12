<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    // Rute Login bebas akses
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('events', EventController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('partners', PartnerController::class);

    // Mengamankan Route Administrasi di balik tembok (Middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
    //Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
    
    
    });
});



// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('events', EventController::class);
//     Route::resource('categories', CategoryController::class);
//     Route::resource('partners', PartnerController::class);
// });
