<?php

use App\Http\Controllers\ShortRedirectController;
use App\Livewire\Dashboard;
use App\Livewire\Links;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
require __DIR__ . '/auth.php';

Route::get('/', Welcome::class)->name('welcome');

Route::middleware("auth")->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/links', Links::class)->name('links');
});



Route::get("/{code}", [ShortRedirectController::class , "redirect"])->name("shorten.link");

