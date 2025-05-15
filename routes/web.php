<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/tour-packages', function () {
    return view('tour-packages');
})->name('tour-packages');

// Blog details route (placeholder)
Route::get('/blog/{slug}', function ($slug) {
    return "Blog details for: " . $slug;
})->name('blog-details');
