<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
})->name('home');

// show all listing
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages.listings');
})->name('listings');

// single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
})->name('show.listing');

// user login
Route::get('/login', function () {
    return view('welcome');
})->name('login');

// user register
Route::get('/register', function () {
    return view('welcome');
})->name('register');

// user saved listings
Route::get('/account/saved', function () {
    return view('pages.saved-listings');
})->name('account.saved');

// user showing status
Route::get('/account/show-status', function () {
    return view('pages.show-status');
})->name('account.show-status');