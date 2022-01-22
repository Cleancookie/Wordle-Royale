<?php

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

Route::get('/', function () {
    return Inertia::render('Homepage', [
        'guesses' => [
            [
                'word' =>  'ratio',
                'correctness' => ['*', 'yellow', 'yellow', 'green', '*'],
            ],
            [
                'word' =>  'clues',
                'correctness' => ['*', 'yellow', 'yellow', 'green', '*'],
            ],
        ]
    ]);
})->name('home');
