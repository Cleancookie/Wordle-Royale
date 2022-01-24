<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class WordleController extends Controller
{
    public function index()
    {
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
    }
}
