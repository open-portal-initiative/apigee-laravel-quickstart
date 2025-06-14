<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['web','set-locale'])->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class,'welcome'])->name('home');

});
