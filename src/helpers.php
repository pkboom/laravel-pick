<?php

use Pkboom\Pick\Pick;

function pick(...$value)
{
    if (app()->environment('testing')) {
        return;
    }

    array_walk($value, function ($value) {
        app(Pick::class)->add($value);
    });
}

function pickObject($value)
{
    pick(serialize($value));
}
