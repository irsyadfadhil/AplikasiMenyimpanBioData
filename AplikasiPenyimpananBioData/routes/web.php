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
Route::get('/form_biodata', [App\Http\Controllers\Home::class, 'form_biodata'])->name('home');
