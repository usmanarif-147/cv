<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'admin/dashboard')->name('admin.dashboard');
});
