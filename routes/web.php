<?php

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
    return view('website.index');
});

Route::get('about', function () {
    return view('website.about');
});

Route::get('service', function () {
    return view('website.service');
});

Route::get('blog', function () {
    return view('website.blog');
});

Route::get('contact', function () {
    return view('website.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
