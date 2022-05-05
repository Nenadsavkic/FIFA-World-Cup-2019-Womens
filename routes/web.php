<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\ProjectController::class, 'welcome'])->name('welcome');

Route::get('/matches', [App\Http\Controllers\ProjectController::class, 'matches'])->name('matches');

Route::get('/matches-json', [App\Http\Controllers\ProjectController::class, 'jsonMatches']);

Route::get('/teams-json', [App\Http\Controllers\ProjectController::class, 'jsonTeams']);
