<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adminpanel' , [App\Http\Controllers\AdminController::class, 'index'])->name('adminpanel');
Route::get('/teams' , [App\Http\Controllers\TeamController::class, 'index'])->name('teams');
Route::get('/create', [App\Http\Controllers\TeamController::class, 'create'])->name('create')->middleware('auth');
Route::post('/create', [App\Http\Controllers\TeamController::class, 'store'])->name('store')->middleware('auth');

