<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;

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

Route::get('/', HomeController::class)->name('home');

Route::view('services', 'services')->name('services');
Route::get('about', function () {
    return Inertia::render('About');
})->name('about');
Route::get('contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('properties', [PropertyController::class, 'index'])->name('properties');
Route::get('properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
