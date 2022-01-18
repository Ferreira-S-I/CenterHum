<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;


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

// ROUTES FOR SITE
Route::get('/',                                     [SiteController::class, 'index'])->name('home');


// ROUTES FOR LOGIN
Route::get('/login',                                [LoginController::class, 'index'])->name('login');
Route::post('/action-login',                        [LoginController::class, 'login'])->name('post.login');
Route::get('/logout',                               [LoginController::class, 'logout'])->name('logout');
Route::get('/reset-password',                       [LoginController::class, 'resetPassword'])->name('reset.password');
Route::post('/action-reset-password',               [LoginController::class, 'resetPasswordAction'])->name('post.reset.password');


