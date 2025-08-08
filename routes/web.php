<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;




/* Route::get('/', function () {
    return view('welcome');
});
 */


/* set the route of the webpages */
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/contact', 'contact');

/* Subcribe route */
Route::post('/subscriptions/choose', [SubscriptionController::class, 'choose'])->name('subscriptions.choose');