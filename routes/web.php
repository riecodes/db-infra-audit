<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/about', 'pages.about')->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::view('/about-cvsu-naic', 'pages.about-cvsu-naic')->name('about-cvsu-naic');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/buildings/{slug}', [BuildingController::class, 'show'])->name('buildings.show');
Route::get('/buildings/{slug}/audit', [BuildingController::class, 'audit'])->name('buildings.audit');
Route::post('/buildings/{building}/update-image', [BuildingController::class, 'updateImage'])->name('buildings.updateImage');
