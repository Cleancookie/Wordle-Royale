<?php

namespace App\Actions\Nickname;

use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class SetNickname
{
    use AsAction;

    public function handle(string $nickname = 'Unknown 👻')
    {
        session()->put('nickname', $nickname);

        return $nickname;
    }

    public function asController(Request $request)
    {
        return $this->handle($request->nickname);
    }

    public function jsonResponse(string $nickaname)
    {
        return response()->json(['nickname' => $nickaname]);
    }
}
