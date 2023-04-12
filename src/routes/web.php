<?php

use Illuminate\Support\Facades\Route;
use Jsxfardin\LaravelFormBuilder\Http\Controllers\FormController;

// Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
Route::prefix('dashboard')->group(function () {
    Route::resource('form-builder', FormController::class);
});
