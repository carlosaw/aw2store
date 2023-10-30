<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data['categories'] = [];
    $data['states'] = [];
    return view('home', $data);
})->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/select-state', [AuthController::class, 'select_state'])->name('select_state');

Route::post('/select-state', [AuthController::class, 'select_state_action'])->name('select_state_action');