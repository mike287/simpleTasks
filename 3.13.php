<?php


//Napisz program, który sprawdzi, ile kolejnych liczb naturalnych zaczynających się
//od 1 daje sumę większą od 100.

function counterA($number)
{

    $counter = 0;
    $digits='';


    for ($i = 1; $i <= $number; $i++) {
        $counter += $i;
        $digits .= $i.", ";

        if ($counter >= $number) {

            $point = substr($digits,0,strlen($digits)-2);

            echo "do osiągniecia liczby $number potrzeba $i liczb: $point po ich dodaniu otrzymujemy $counter";
            break;
        }

    }
}


counterA(100);
echo "<hr>";
echo "<br>drugi sposób";

// sposób drugi

function counterB($number)
{
    $sum = 0;
    $i = 0;
    do
    {
        $sum += ++$i;
        var_dump($i);
        var_dump($sum);
    }
    while($sum < $number);

    return "do osiagniecia $sum ". "dodano liczby od 1 do $i";
}

echo counterB(100);

