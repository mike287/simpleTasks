<?php

//Napisz program, który znajdzie najmniejszy wspólny podzielnik dwóch liczb A i B.

function NWD($a, $b)
{

        while ($a != $b)
        {
            if($b > $a) {
                $x = $a;
                $a = $b;
                $b = $x;
            }

            $a = $a - $b;
            var_dump($a);
        }
        echo $a;
    }


NWD(55,100);