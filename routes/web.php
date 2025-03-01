<?php

use Illuminate\Support\Facades\Route;

// Admin Route
Route::prefix('admin')->middleware('checkRole:admin')->group(function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', function () {
        return 'Welcome Admin';
    });
});


// User Route
Route::prefix('user')->middleware('checkRole:user')->group(function () {
    Route::get('/', function () {
        return redirect('/user/dashboard');
    });
    Route::get('/dashboard', function () {
        return 'Welcome User';
    });
});

// Public Route
Route::get('/', function () {
    return 'Welcome Public';
});
