<?php

//Utwórz program, który będzie wyświetlał formularz z możliwością wpisania trzech danych:
//a, b i c, po czym wyświetli rozwiązanie równania kwadratowego: ax 2 + bx + c = 0.

if((isset($_POST['A']) && isset($_POST['B']) && isset($_POST['C'])))
{

    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"] ;

    echo "A = ".$a."<br>";
    echo "B = ".$b."<br>";
    echo "C = ".$c."<br>";
    echo '<div><a href="4.03.php">Powrót do formularza</a></div>';

    $delta = (($b * $b) - (4*$a*$c));


    if($delta > 0)
    {
        $x1 = ((-$b)-(sqrt($delta)))/(2*$a);
        $x1 = round($x1,2);
        $x2 = ((-$b)+(sqrt($delta)))/(2*$a);
        $x2 = round($x2,2);

        echo "<b>delta > 0 </b>".' czyli dwa miejsca zerowe x1 oraz x2'."<br>";
        echo "x1 = $x1"."<br>";
        echo "x2 = $x2"."<br>";
    }
    elseif ($delta === 0)
    {
        echo "<b>delta = 0 </b>".' czyli jedno miejsce zerowe x1'."<br>";
        $x1 = -$b/(2*$a);
        $x1 = round($x1,2);

        echo "x1 = $x1"."<br>";
    }
    else
    {
        echo "nie ma pierwiastków dla podanych A,B oraz C";
    }


}
else {

    echo "podaj parametry A,B,C do obliczenia równiania kwadratowego <b>ax<SUP>2</SUP>  + bx + c</b>"."<br>";

    echo "<form action='' method='post'>";
    echo "<div><input type='number' step='0.01' placeholder='A' name='A' required></div>";
    echo "<div><input type='number' step='0.01' placeholder='B' name='B' required></div>";
    echo "<div><input type='number' step='0.01' placeholder='C' name='C' required></div>";
    echo "<input type='submit'>";
    echo "</form>";
}

