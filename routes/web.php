<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\public\MainController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

// Admin Route
Route::prefix('admin')->middleware('checkRole:admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('checkRole:admin')->name('dashboard');
});


// User Route
Route::prefix('user')->middleware('checkRole:user')->name('user.')->group(function () {
    Route::get('/', function () {
        return redirect('/user/dashboard');
    });
    Route::get('/dashboard', [UserController::class, 'index'])->middleware('checkRole:user')->name('dashboard');
});

// Public Route
Route::prefix('/')->name('public.')->group(function () {
    Route::get('', [MainController::class, 'index'])->name('index');
});
