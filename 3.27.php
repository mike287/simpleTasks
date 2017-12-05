<?php

//Napisz program, który wylosuje położenie hetmana na szachownicy i wyświetli go,
//pokazując, które pola są w jego zasięgu.

echo "<table border='1'>";

    $x = rand(1,8);
    $y = rand(1,8);
    $hetman = $x.$y;
    var_dump($hetman);


    for ($i =1; $i <= 8; $i++)
    {
        echo "<tr>";

            for ($j = 1; $j <= 8; $j++)
            {
                    if(($hetman != $i.$j) && ($x != $i) && ($y != $j) && ($i+$j !== $x+$y) && ($i-$j !== $x-$y)  )
                {
                    echo "<td width='25' align='center'>";
                    echo $i.$j;
                }

                else
                {
                    echo "<td width='25' align='center' bgcolor='#faebd7'>";
                    echo "H";

                }

                echo "</td>";
            }
        echo "</tr>";
    }


