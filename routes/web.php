<?php

use App\Http\Controllers\Page;
use App\Http\Controllers\Processing;
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

Route::get('/',[Page::class, 'index'] )->name('home');
Route::get('/user.profile',[Page::class, 'profile'] )->name('profile');
Route::get('/user.vote',[Page::class, 'vote'] )->name('vote');
Route::get('/user.register',[Page::class, 'register'] )->name('register');
Route::get('/user.index',[Processing::class, 'logout'] )->name('logout');

Route::post('/user.register',[Processing::class,'register_user'] )->name('register_user');
Route::post('/',[Processing::class,'login'] )->name('login');
