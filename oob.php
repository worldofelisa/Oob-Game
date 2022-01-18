<?php

echo "Hello, what's your name?\n";

$name = readline(">> ");
$name = strtolower($name);
$letters = str_split($name);

foreach ($letters as $letter) {
    switch ($letter) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            echo "oob";
            break;
        default:
            echo "$letter";
    }
}
