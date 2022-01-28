<?php

Class Oobify
{
    /**
     * @return string
     */
    public function changeText($text)
    {
       $vowels = ["a", "e", "i", "o", "u"];
       $new_text = "";

       foreach (str_split(strtolower($text)) as $letter)
        {
            if (in_array($letter, $vowels))
            {
                $new_text .= "oob";
            } else
            {
                $new_text .= $letter;
            }
        }
        return ucfirst($new_text);
    }
}


$text = new Oobify();
$input = readline(">> ");
echo $text->changeText($input);
