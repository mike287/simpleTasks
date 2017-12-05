<?php

// napisz program który znajdzie podana wartosc w tablicy i zamieni ja na liczbe 666

function changer($val)
{

    $testArray = [];
    for ($i = 0; $i <= 8; $i++) {
        array_push($testArray, $i + 3);
    }

    if (in_array($val, $testArray)) {
        $a = array_search($val, $testArray);
        $testArray[$a] = 666;

    }
    var_dump($testArray);
}

changer(8);

