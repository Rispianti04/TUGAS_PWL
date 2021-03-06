<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers\BladeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\BladeController::Class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\BladeController::Class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\BladeController::Class, 'about'])->name('about');
