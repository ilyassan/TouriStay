<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name("home");

Route::get('/properties', [PropertyController::class, 'index'])->name("properties.index");

Route::get('/properties/create', [PropertyController::class, 'create'])->name("properties.create")->middleware("auth");
Route::post('/properties/store', [PropertyController::class, 'store'])->name("properties.store")->middleware("auth");

Route::get('/properties/edit/{property}', [PropertyController::class, 'edit'])->name("properties.edit")->middleware("auth");
Route::put('/properties/update/{property}', [PropertyController::class, 'update'])->name("properties.update")->middleware("auth");

Route::get('/favorites', function () {
    return view('favorites.index');
})->name("favorites.index");

Route::get('/my-properties', function () {
    return view('my-properties.index');
})->name("my-properties.index");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

Route::get('/admin/properties', function () {
    return view('properties.admin');
})->name("properties.admin");

Route::middleware('guest')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
