<?php

use Pkboom\Pick\Pick;

function pick($value)
{
    app(Pick::class)->add($value);
}

function pickObject($value)
{
    pick(serialize($value));
}
