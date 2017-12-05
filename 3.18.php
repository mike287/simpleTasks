<?php

//Napisz funkcję, która dla parametru będącego imieniem zgaduje płeć osoby.

function sexChecker($name)
{
    $name = strtolower($name);
    $nameReturn = ucfirst($name);
    $lastLetter = $name[strlen($name)-1];

    if($name == "kuba")
    {
        echo "$nameReturn to imie męskie";
    }

    elseif ($name =='beatrycze')
    {
        echo $nameReturn." to imię żeńskie";
    }

    elseif($lastLetter !='a')
    {
        echo $name." to imię męskie";
    }

    else
    {
        echo $nameReturn." to imię żeńskie";
    }

    $name = ucfirst($name);
}

echo sexChecker("beatrycze");