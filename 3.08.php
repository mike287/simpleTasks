<?php

//Wylicz pierwiastki równania kwadratowego o współczynnikach A, B i C.

?>

<form action="" method="post">
    <input type="number" placeholder="podaj A" name="A" required><br>
    <input type="number" placeholder="podaj B" name="B" required><br>
    <input type="number" placeholder="podaj C" name="C" required><br>
    <input type="submit" value="przelicz">

</form>

<?php

if (isset($_POST['A']) AND isset($_POST['B']) AND isset($_POST['C']))
{
   $a = $_POST['A'];
   $b = $_POST['B'];
   $c = $_POST['C'];

   $delta = $b * $b - 4 * $a * $c;
   echo "delta dla A = $a, B = $b, C = $c <br> wynosi = $delta <br>";

   if($delta > 0)
   {
       $x1 = (-$b - sqrt($delta)) / (2 * $a);
       $x2 = (-$b + sqrt($delta)) / (2 * $a);

       $x1 = round($x1,3);
       $x2 = round($x2,3);
       echo "x1 = $x1 <br> x2 = $x2";
   }

   elseif ($delta == 0)
   {
       $x1 = -$b / 2*$a;

       $x1 = round($x1,3);
       echo "x1 = $x1";
   }
   else
   {
       echo "nie ma pierwiastków";
   }
   
}



