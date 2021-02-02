<?php

use App\Http\Controllers\ContactController;// импорт класса для контроллера
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class,'submit'])->name('contact-form'); // в версии Laravel  8 контролеры теперь вызываются так обязательно импорт класс


