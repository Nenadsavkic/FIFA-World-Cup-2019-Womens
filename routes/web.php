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



Auth::routes(['register' => false, 'login' => false]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Show all teams by groups
Route::get('/', [App\Http\Controllers\ProjectController::class, 'welcome'])->name('teams');

// show all matches from first stage to final
Route::get('/matches', [App\Http\Controllers\ProjectController::class, 'matches'])->name('matches');

// return JSON with all matches sorted by weather temperature from warmest to coldest
Route::get('/matches-json', [App\Http\Controllers\ProjectController::class, 'jsonMatches']);

// Return JSON with teams data together with statistic for each team
Route::get('/teams-json', [App\Http\Controllers\ProjectController::class, 'jsonTeams']);



