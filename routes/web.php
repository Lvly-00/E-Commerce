<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('LandingPage');
});


Route::get('/login', function () {
    return inertia('Login');
});
Route::get('/contact', function () {
    return inertia('Contact');
});
