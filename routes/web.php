<?php

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

Route::get('/', function () {
    return view('viewer.pages.index');
});

Route::get('/products', function () {
    return view('viewer.pages.products');
})->name('products');

Route::get('/closed-loop', function () {
    return view('viewer.pages.closed_loop');
})->name('closed-loop');

Route::get('/markets', function () {
    return view('viewer.pages.markets');
})->name('markets');

Route::get('/about-use', function () {
    return view('viewer.pages.about_us');
})->name('about-us');

Route::get('/contact-use', function () {
    return view('viewer.pages.contact_us');
})->name('contact-us');
