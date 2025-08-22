<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\TourPackage;
use App\Models\Gallery;
use App\Models\Room;
use App\Models\Review;
use App\Models\Blog;

Route::get('/', function () {
    // $rooms = Room::orderByDesc('id')->get();
    $reviews = Review::orderByDesc('id')->get();
    
    return view('index', compact( 'reviews'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/rooms-details/{id}', function ($id) {
    $room = Room::findOrFail($id);
    return view('rooms-details', compact('room'));
})->name('rooms-details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gallery', function () {
    $rooms = Room::orderByDesc('id')->get();
    $galleries = Gallery::orderByDesc('id')->get();
    return view('gallery', compact('galleries', 'rooms'));
})->name('gallery');

Route::get('/rooms', function () {
    $rooms = Room::orderByDesc('id')->get();
    return view('rooms', compact('rooms'));
})->name('rooms');

Route::get('/restaurants', function () {
    $rooms = Room::orderByDesc('id')->get();
    return view('restaurants', compact('rooms'));
})->name('restaurants');

Route::get('/tour-packages', function () {
    $tourPackages = TourPackage::orderByDesc('id')->get();
    return view('tour-packages', compact('tourPackages'));
})->name('tour-packages');

Route::get('/blog', function () {
    $blogs = Blog::orderByDesc('id')->get();
    return view('blog', compact('blogs'));
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-details/{id}', function ($id) {
    $blogs = Blog::orderByDesc('id')->get();
    $blog = Blog::findOrFail($id);
    return view('blog-details', compact('blogs', 'blog'));
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
    Route::resource('reviews', App\Http\Controllers\Admin\ReviewController::class);
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);

});

require __DIR__.'/auth.php';
