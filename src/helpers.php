<?php

use Pkboom\Pick\Pick;

function pick($value)
{
    if (app()->environment('testing')) {
        return;
    }

    app(Pick::class)->add($value);
}

function pickObject($value)
{
    pick(serialize($value));
}
