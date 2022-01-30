<?php

namespace App\Actions\Wordle;

use Exception;
use App\Models\Room;
use App\Models\User;
use App\Models\Word;
use App\Models\Guess;
use App\Models\Round;
use Lorisleiva\Actions\Concerns\AsAction;

class MakeGuess
{
    use AsAction;

    public function handle(string $guess, Round $round)
    {
        $user = session()->getId();
        $word = Word::query()->where('name', $guess)->get()->first();

        if (!$word) {
            // maybe in the future we will allow arbitrary words
            throw new Exception('Word not found');
        }

        // todo: just realised i should really start with setting up the room hehe
        Guess::create(['']);
    }
}
