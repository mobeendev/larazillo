<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
// use App\Http\Controllers\ListingController;
// use App\Http\Controllers\UserAccountController;
// use App\Http\Controllers\ListingOfferController;
// use App\Http\Controllers\NotificationController;
// use App\Http\Controllers\RealtorListingController;
// use App\Http\Controllers\NotificationSeenController;
// use Illuminate\Notifications\Events\NotificationSent;
// use App\Http\Controllers\RealtorListingImageController;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use App\Http\Controllers\RealtorListingAcceptOfferController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);