<?php

//napisz funkcje ktora stwierdzi palindrom

function palindrom($palindrom)
{
    $palindrom = strtolower($palindrom);
    $palindromChecker ='';

    for ($i = strlen($palindrom)-1; $i >= 0; $i--)
    {
        $palindromChecker .= $palindrom[$i];

    }

        if($palindrom === $palindromChecker)
        {
            echo "słowo <b>$palindrom</b> jest palindromem";
        }
        else
        {
            echo "słowo <b>$palindrom</b> nie jest palindromem, jest nim np kajak";
        }

    return $palindromChecker;
}

palindrom('checker');