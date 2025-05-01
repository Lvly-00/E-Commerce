<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthAdminController;


//admin routes


// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
//     Route::post('/login', [AdminController::class, 'adminLoginPost'])->name('admin.loginPost');
//     Route::post('logout', [AdminController::class, 'logout'])->name('logout');

//     Route::middleware('admin')->group(function () {
//         Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
//     });
// });



Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return inertia('LandingPage');
    });

    Route::get('/login', [AuthAdminController::class, 'login'])->name('login');
    Route::post('/login', [AuthAdminController::class, 'loginPost'])->name('loginPost');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'registerPost'])->name('registerPost');
});


    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Route::post
    });

    Route::middleware(['auth'])->group(function () {

        Route::get('/home', [UserController::class, 'home'])->name('user.home');
    });

    Route::post('/logout', function(){
        Auth::logout();
    });
