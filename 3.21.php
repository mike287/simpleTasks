<?php

// funkcja fibonacciego

function Fibonacci ($n)
{
    $przedpoprzedni = 0; $poprzedni = 1;

    for ($i=2; $i<=$n; $i++) {

        $pomoc = $przedpoprzedni;
        $przedpoprzedni = $poprzedni;
        $poprzedni = $poprzedni + $pomoc;

    }
    return $poprzedni;
}

echo Fibonacci(6);