<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class, 'LandingPage'])->name('landing');
Route::get('/login', [PageController::class, 'LoginPage'])->name('login');
Route::post('/login/masuk', [PageController::class, 'Masuk'])->name('login.masuk');
Route::get('/dashboard', [PageController::class, 'Dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/logout', [PageController::class, 'Logout'])->name('logout');
