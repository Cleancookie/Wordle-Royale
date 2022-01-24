<?php

use App\Actions\Nickname\GetNickname;
use App\Actions\Nickname\SetNickname;
use App\Http\Controllers\Ajax\NicknameController;
use App\Http\Controllers\WordleController;
use Inertia\Inertia;
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

Route::get('/', [WordleController::class, 'index'])->name('home');

Route::get('nickname', GetNickname::class)->name('nickname.index');
Route::post('nickname', SetNickname::class)->name('nickname.store');
