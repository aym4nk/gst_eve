<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Event;
use App\Models\User;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InfoUserController;

/* =========================================
   HOME
========================================= */

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

/* =========================================
   AUTH PAGES
========================================= */

Route::get('/login', function () {

    return view('login');

})->name('login');


Route::get('/register', function () {

    return view('register');

})->name('register');

/* =========================================
   AUTH ACTIONS
========================================= */

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

/* =========================================
   DASHBOARD
========================================= */

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware('auth');

/* =========================================
   ADMIN
========================================= */

Route::get('/admin', function () {

    // guest

    if (!Auth::check()) {

        return redirect('/login');

    }

    // not admin

    if (auth()->user()->role != 'admin') {

        return redirect('/');

    }

    return view('admin', [

        'users' => User::all(),

        'events' => Event::all(),

    ]);

})->name('admin');

/* =========================================
   AUTH PAGES
========================================= */

Route::middleware('auth')->group(function () {

    /* PROFILE */

    Route::get('/profile', [InfoUserController::class, 'index'])
        ->name('profile');

    Route::post('/profile/update', [InfoUserController::class, 'update'])
        ->name('profile.update');

    /* ADD EVENT */

    Route::get('/add-event', [EventController::class, 'create'])
        ->name('event.create');

    /* STORE EVENT */

    Route::post('/add-event', [EventController::class, 'store'])
        ->name('event.store');

});
// =========================================
// routes/web.php
// =========================================

Route::middleware('auth')->group(function () {

    /* DELETE EVENT */

    Route::delete('/admin/event/{id}',
        [EventController::class, 'destroy'])

        ->name('event.delete');

    /* DELETE USER */

    Route::delete('/admin/user/{id}',
        [InfoUserController::class, 'destroy'])

        ->name('user.delete');

});

Route::get('/event/{id}',
    [EventController::class, 'show'])

    ->name('event.details');