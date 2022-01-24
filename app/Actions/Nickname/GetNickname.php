<?php

namespace App\Actions\Nickname;

use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class GetNickname
{
    use AsAction;

    public function handle()
    {
        return session('nickname');
    }

    public function asController(Request $request)
    {
        return $this->handle();
    }

    public function jsonResponse(string $nickaname)
    {
        return response()->json(['nickname' => $nickaname]);
    }
}
