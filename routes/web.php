<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about')->name('about');

Route::view('/loan-products', 'loan-products')->name('loan-products');

Route::view('/contact', 'contact')->name('contact');
