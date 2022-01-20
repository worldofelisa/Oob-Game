<?php

echo "Hello, what's your name?\n";
$name = readline(">> ");
$vowels = ["a", "e", "i", "o", "u"];

while ($name != false) {
    $new_name = "";

    foreach (str_split(strtolower($name)) as $letter) {
        if (in_array($letter, $vowels)) {
            $new_name .= "oob";
        } else {
            $new_name .= $letter;
        }
    }

    $new_name = ucfirst($new_name);
    echo "Hello, $new_name!\n";
    $name = readline(">> ");
}

echo "Hoovoob oob grooboobt dooby!\n";
