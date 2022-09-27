<?php

$path = getcwd().'/composer.json';

$composer = json_decode(file_get_contents($path), true);

$composer['autoload']['psr-4']["Pkboom\\Pick\\"] = "src/";

file_put_contents($path, json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
