<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [App\Http\Controllers\HomeController::class, 'sendContactForm'])->name('sendContactForm');
Route::get('about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
