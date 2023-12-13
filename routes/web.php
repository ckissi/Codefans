<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('home', '/')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');
    Route::post('logout', LogoutController::class)
        ->name('logout');
});


Route::middleware(['auth', 'update.streak'])->group(function () {
});

Route::middleware('guest')->group(function () {
    // ...
    Route::get('auth/{provider}/redirect', ['App\Http\Controllers\Auth\SocialiteController', 'loginSocial'])
        ->name('socialite.auth');

    Route::get('auth/{provider}/callback', ['App\Http\Controllers\Auth\SocialiteController', 'callbackSocial'])
        ->name('socialite.callback');
});

Route::get('blog', ['App\Http\Controllers\BlogController', 'index'])->name('blog.index');
Route::get('blog/{slug}', ['App\Http\Controllers\BlogController', 'show'])->name('blog.show');
Route::get('blog/category/{slug}', ['App\Http\Controllers\BlogController', 'showCategory'])->name('blog.category.show');

Route::get('user/unsubscribe/{uuid}', ['App\Http\Controllers\UserController', 'unsubscribe'])->name('user.unsubscribe');


Route::middleware(['update.streak'])->group(function () {
    Route::get('/daily-activity', function () {
        // Logic for the daily activity goes here
        return response()->json(['message' => 'Daily activity recorded.']);
    })->name('daily-activity');
});
