<?php

use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\InsideController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\ReferralController;
use App\Http\Controllers\Front\WebhookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/' ,[HomeController::class ,'home'])->name('front.home');
Route::get('/about-us' ,[HomeController::class ,'about'])->name('front.about');
Route::get('/goals' ,[HomeController::class ,'goals'])->name('front.goals');
Route::get('/team' ,[HomeController::class ,'team'])->name('front.team');
Route::get('/about-me' ,[HomeController::class ,'teamPage'])->name('front.teamPage');
Route::get('/our-works' ,[HomeController::class ,'works'])->name('front.works');
Route::get('/get-involved' ,[HomeController::class ,'involved'])->name('front.involved');
Route::get('/contact-us' ,[HomeController::class ,'contact'])->name('front.contact');





