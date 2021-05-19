<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Home;

Route::redirect('/', 'auth/login');
Route::get('/home', Home::class)->name('home')->middleware('auth', 'verified');

include __DIR__.'/auth.php';
include __DIR__.'/my.php';

Route::get('contact-form', [ContactFormController::class, 'create'])->name('contact-form.create');
Route::post('contact-form', [ContactFormController::class, 'store'])->name('contact-form.store');
