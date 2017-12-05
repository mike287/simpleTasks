<?php

//Napisz program, który sprawdzi, czy n jest liczbą pierwszą.

$n = 19;

for ($i = 2; $i <= $n-1; $i++)
{
    if($n % $i == 0)
    {
        echo "$n jest liczbą złożoną";
        break;
    }
    elseif ($n == 0 or $n == 1 )
    {
        echo "$n nie jest ani liczbą pierwszą ani złożoną";
        break;
    }
    else
    {
        echo "$n jest liczbą pierwszą";
        break;
    }
}
