<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\OumoiController::class,'index'])->name('home');

Route::post('/contact-us',[\App\Http\Controllers\ContactController::class,'contact_us'])->name('contact_us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
