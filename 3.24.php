<?php

//Napisz program, który zapełni tablicę 20 liczbami losowymi z zakresu 1...20, a na-
//stępnie sprawdzi, ile razy występuje w niej dana liczba.


function finder($number)
{
    echo "szukana liczba to $number"."<br>";

    $array = array();
    $counter = 0;
    for ($i = 0; $i <= 20; $i++) {
        array_push($array, rand(1, 20));

        if ($array[$i] == $number) {

            $counter += 1;
        }

    }

    if ($counter == 0)
    {
        echo "$number nie wystepuje w tablicy";
    }
    else {

        echo "$number wystepuje $counter razy w tablicy" . "<br>";
    }
    var_dump($array);


}


finder(4);