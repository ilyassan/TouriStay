<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/properties', function () {
    return view('properties.index');
})->name("properties.index");

Route::get('/properties/create', function () {
    return view('properties.create');
})->name("properties.create");

Route::get('/favorites', function () {
    return view('favorites.index');
})->name("favorites.index");

Route::get('/my-properties', function () {
    return view('my-properties.index');
})->name("my-properties.index");

Route::middleware('guest')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
