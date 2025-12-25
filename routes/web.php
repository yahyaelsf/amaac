<?php

use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\InsideController;
use App\Http\Controllers\Front\MembershipController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\ReferralController;
use App\Http\Controllers\Front\VolunteerController;
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
Route::get('/future-Arab-muslim',function(){
    return view('front.news.Future');
})->name('news.future');
Route::get('/know-your-rights',function(){
    return view('front.news.Rights');
})->name('news.rights');
Route::get('/youth-leadership:',function(){
    return view('front.news.Generation');
})->name('news.leadership');
Route::get('/arab-relations:',function(){
    return view('front.news.Relations');
})->name('news.relations');
Route::get('/combating-islamophobia',function(){
    return view('front.news.Combating');
})->name('news.combating');
Route::get('/strengthening-community-resilience',function(){
    return view('front.news.Strengthening');
})->name('news.strengthening');

Route::get('language/{locale}', function ($locale) {
    if (! in_array($locale, ['ar', 'en'])) {
        abort(404);
    }

    session()->put('locale', $locale);
    app()->setLocale($locale);

    return redirect()->back();
})->name('lang.switch');

Route::get('/membership-application',function(){
    return view('front.membership_application');
})->name('membership_application');
Route::get('/volunteer-application',function(){
    return view('front.volunteer_application');
})->name('volunteer_application');
Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');
Route::post('/volunteer/send', [VolunteerController::class, 'send'])
    ->name('volunteer.send');
Route::post('/membership/send', [MembershipController::class, 'send'])
    ->name('membership.send');
