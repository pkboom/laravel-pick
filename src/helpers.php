<?php

use Pkboom\Pick\Pick;

if (! function_exists('pick')) {
    function pick($value)
    {
        app(Pick::class)->add($value);
    }
}
