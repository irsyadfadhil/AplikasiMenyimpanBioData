<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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

Route::resource('/', Home::class)->parameters(['home' => 'home']);

// Route::resource('/form_biodata', Home::class)->parameters(['form_biodata' => 'form_biodata']);

Route::get('/login', [Home::class, 'login'])->name('login');

Route::get('/register', [Home::class, 'register'])->name('register');
Route::post('register/action', [Home::class, 'actionregister'])->name('actionregister');

Route::post('/actionlogin', [Home::class, 'actionlogin'])->name('actionlogin');

Route::get('/home_user', [Home::class, 'home_user'])->middleware('auth');
Route::get('/form_biodata', [Home::class, 'form_biodata'])->middleware('auth');
Route::get('/actionlogout', [Home::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
