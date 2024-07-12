<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('login', [UserController::class, 'checkLogin'])->name('user.checklogin');
