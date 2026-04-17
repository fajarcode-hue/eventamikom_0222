<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/detail', function () {
    return view('event_detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/adminkelola', function () {
    return view('admin.event');
});

Route::get('/adminlaporan', function () {
    return view('admin.transaction');
});