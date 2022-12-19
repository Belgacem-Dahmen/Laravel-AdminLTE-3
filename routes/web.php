<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/employes', [App\Http\Controllers\HomeController::class, 'index'])->name('employes');
Route::get('/parametres', [App\Http\Controllers\HomeController::class, 'index'])->name('parametres');
Route::get('/demandes', [App\Http\Controllers\HomeController::class, 'index'])->name('demandes');

Auth::routes();
