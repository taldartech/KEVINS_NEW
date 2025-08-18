<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\TourPackage;
use App\Models\Gallery;
use App\Models\Room;

Route::get('/', function () {
    $rooms = Room::orderByDesc('id')->get();
    
    return view('index', compact('rooms'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/rooms-details/{id}', function ($id) {
    $rooms = Room::orderByDesc('id')->get();
    $room = Room::findOrFail($id);
    return view('rooms-details', compact('room', 'rooms'));
})->name('rooms-details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gallery', function () {
    $galleries = Gallery::orderByDesc('id')->get();
    return view('gallery', compact('galleries'));
})->name('gallery');

Route::get('/rooms', function () {
    $rooms = Room::orderByDesc('id')->get();
    return view('rooms', compact('rooms'));
})->name('rooms');

Route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

Route::get('/tour-packages', function () {
    $tourPackages = TourPackage::orderByDesc('id')->get();
    return view('tour-packages', compact('tourPackages'));
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
    $rooms = Room::orderByDesc('id')->get();
    return view('deluxe-room', compact('rooms'));
})->name('deluxe-room');

Route::get('/standard-room', function (){
    $rooms = Room::orderByDesc('id')->get();
    return view('standard-room', compact('rooms'));
})->name('standard-room');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/refund-policy', function () {
    return view('refund-policy');
})->name('refund-policy');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/disclaimer', function () {
    return view('disclaimer');
})->name('disclaimer');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('taldarpopups', App\Http\Controllers\Admin\TaldarpopupController::class);
    Route::get('taldarpopup/show', [App\Http\Controllers\Admin\TaldarpopupController::class, 'show'])
    ->name('admin.taldarpopup.show');
  
    
    Route::resource('rooms', App\Http\Controllers\Admin\RoomController::class);
    Route::resource('tour-packages', App\Http\Controllers\Admin\TourPackageController::class);
    Route::get('tour-packages/show', [App\Http\Controllers\Admin\TourPackageController::class, 'show'])
    ->name('admin.tour-packages.show');
    Route::resource('galleries', App\Http\Controllers\Admin\GalleryController::class);

});

require __DIR__.'/auth.php';
