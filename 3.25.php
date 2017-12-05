<?php

//Napisz program, który zapełni tablicę 20 liczbami losowymi z zakresu 1...20,
//a następnie uporządkuje je niemalejąco.

function clearArray()
{
    $array = array();

    for ($i = 0; $i < 20; $i++) {
        array_push($array, rand(1, 20));

    }

    sort($array);
    foreach ($array as $item) {
        echo $item . "<br>";
    }

}

clearArray();


