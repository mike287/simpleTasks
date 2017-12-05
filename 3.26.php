<?php

//Napisz program, który do tablicy dwuwymiarowej o wielkości 3 × 3 wpisze wartości
//losowe z zakresu –5...5 i policzy wyznacznik macierzy, którą tablica reprezentuje.

function macierz()
{
    echo "<table border='2'>";
    for ($i = 1; $i <= 3; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= 3; $j++) {
            echo "<td align='center' width='50'>";
            $liczba[$i][$j] = rand(-5, 5);
            echo $liczba[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }

    $macierz = ($liczba[1][1] * $liczba[2][2] * $liczba[3][3]) + ($liczba[1][2]  * $liczba[2][3] * $liczba[3][1]) + ($liczba[1][3] * $liczba[2][1] * $liczba[3][2]) - ($liczba[1][1] * $liczba[2][3] * $liczba[3][2]) - ($liczba[1][2] * $liczba[2][1] * $liczba[3][3]) - ($liczba[1][3] * $liczba[2][2] * $liczba[3][1]) ;



    echo "</table>";
        echo "wyznacznik macierzy to ".$macierz;

}

macierz();
