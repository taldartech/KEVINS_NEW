<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::get('/tour-packages', function () {
    return view('tour-packages');
})->name('tour-packages');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/nearby-attractions', function () {
    return view('nearby-attractions');
})->name('nearby-attractions');

Route::get('/historical-places', function () {
    return view('historical-places');
})->name('historical-places');

Route::get('/deluxe-room', function () {
    return view('deluxe-room');
})->name('deluxe-room');

Route::get('/standard-room', function (){
    return view('standard-room');
})->name('standard-room');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('rooms', App\Http\Controllers\Admin\RoomController::class);
});

require __DIR__.'/auth.php';
