<?php

namespace App\Actions\Nickname;

use Lorisleiva\Actions\Concerns\AsAction;

class SetNickname
{
    use AsAction;

    public function __construct(
        public string $nickname
    ) {
    }

    public function handle()
    {
        session()->put('nickname', $this->nickname);
        dd($this->nickname);

        return $this;
    }
}
