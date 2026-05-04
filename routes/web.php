<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use app\Models\Event;
use app\Models\User;

Route::get('/', function () {
    return view('home');
})->name('home');

/* AUTH PAGES */
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/register', fn() => view('register'))->name('register');

/* AUTH ACTIONS */
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

/* 🔐 صفحة محمية */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

/* 👮 ADMIN */
Route::get('/admin', function () {
    if (!Auth::check() || auth()->user()->role != 'admin') {
        return redirect('/');
    }
    return view('admin', [
        'users' => User::all(),
        'events' => Event::all(),
    ]);
});

Route::get('/profil', function () {
    return view('profil');
})->name('profil');


Route::get('/admin', function () {
    return view('admin');
});
 