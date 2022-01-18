<?php

echo "Hello, what's your name?\n";

$name = readline(">> ");
$name = strtolower($name);
$letters = str_split($name);
$new_name = "";

foreach ($letters as $letter) {
    switch ($letter) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            $new_name .= "oob";
            break;
        default:
            $new_name .= "$letter";
    }
}
echo "Hello $new_name!\n";