<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\DashboardController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show'])
  ->middleware('auth');
Route::resource('listing', ListingController::class)
  ->only(['index', 'show']);

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

  Route::resource('user-account', UserAccountController::class)
  ->only(['create', 'store']);
  
  Route::prefix('dashboard')
  ->name('dashboard.')
  ->middleware('auth')
  ->group(function () {
    Route::name('listing.restore')
      ->put(
        'listing/{listing}/restore',
        [DashboardController::class, 'restore']
      )->withTrashed();
    Route::resource('listing', DashboardController::class)
      ->only(['index', 'destroy', 'edit', 'update', 'create', 'store'])
      ->withTrashed();
  });