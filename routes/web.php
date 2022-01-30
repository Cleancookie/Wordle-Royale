<?php

use Inertia\Inertia;
use App\Actions\Wordle\MakeGuess;
use App\Actions\Nickname\GetNickname;
use App\Actions\Nickname\SetNickname;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordleController;
use App\Http\Controllers\Ajax\NicknameController;

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

Route::get('/', [WordleController::class, 'index'])->name('home');

Route::get('/nickname', GetNickname::class)->name('nickname.index');
Route::post('/nickname', SetNickname::class)->name('nickname.store');

Route::post('/guess', MakeGuess::class)->name('guess.store');
