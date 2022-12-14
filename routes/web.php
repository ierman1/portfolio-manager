<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('home');

Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::put('/login', [SessionController::class, 'store'])
    ->middleware('guest')
    ->name('session.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
