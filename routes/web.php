<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
