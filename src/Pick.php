<?php

namespace Pkboom\Pick;

use Illuminate\Support\Facades\Http;

class Pick
{
    public $dump = [];

    public function add($value)
    {
        $this->dump[] = $value;
    }

    public function __destruct()
    {
        Http::post(config('pick.pick-server'), [
            'data' => json_encode($this->dump),
        ]);
    }
}
