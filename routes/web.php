<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
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
Route::view('/login', 'pages.login')->name('login');
Route::view('/signup', 'pages.signup')->name('signup');

Route::get('/buildings/{slug}', [BuildingController::class, 'show'])->name('buildings.show');
Route::get('/buildings/{slug}/audit', [BuildingController::class, 'audit'])->name('buildings.audit');
