<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('fight', 'fight')->name('fight');
    Route::view('equipment', 'equipment')->name('equipment');
    Route::view('town', 'town')->name('town');
    Route::view('house', 'house')->name('house');
});

require __DIR__.'/settings.php';
