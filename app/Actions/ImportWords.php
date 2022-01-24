<?php

namespace App\Actions;

use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class ImportWords
{
    use AsAction;

    public string $commandSignature = 'import-words {url}';

    private string $answerList = 'https://gist.githubusercontent.com/Cleancookie/c9b9906d723f8e88c89251e27be69bb4/raw/d73bf24de3031d7266fc4a53d2595b59e401d4e0/wordle.json';
    private string $acceptedWords = 'https://gist.githubusercontent.com/Cleancookie/155a13d8b2fda06b6a5771b5280a3536/raw/f3254727c19276b6636133a38e5bca16908d4f01/wordle-accepted-words.json';

    public function handle()
    {
        // ...
    }

    public function asCommand(Command $command): void
    {
        $this->handle(
            $command->argument('role')
        );

        $command->info('Done!');
    }
}
