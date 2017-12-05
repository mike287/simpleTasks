<?php

//Napisz program, który obliczy i wyświetli N!.

$n = 10;
$silnia = 1;

for ($i = 1; $i <= $n ; $i++)
{
    $silnia *= $i;
}
echo "$n! = $silnia";