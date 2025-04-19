<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    fn() => view('index')
);
Route::get('/privacy-policy', fn() => view('privacy'));
Route::get('/terms-of-service', fn() => view('terms'));
Route::get('/refund-policy', fn() => view('refund'));

Route::fallback(fn() => view('index'));
