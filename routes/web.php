<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Register;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
   Route::get('/home', [HomeController::class, 'home'])->name('home');
   Route::post('/data/store', [FormController::class, 'store'])->name('form.store');
   Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});



// Login & Register routes 
Route::get('/login', [LoginController::class, 'showForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [Register::class, 'index'])->name('register.form');
Route::post('/register', [Register::class, 'store'])->name('register');


