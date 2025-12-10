<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio.home');
});

Route::get('/about', function () {
    return view('portfolio.about');
});

Route::get('/projects', function () {
    return view('portfolio.projects');
});

Route::get('/contact', function () {
    return view('portfolio.contact');
});
