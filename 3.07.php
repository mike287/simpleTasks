<?php

// program ma porównywać dwie podane liczby, oraz ustawiać trzy w kolejności malejącej

$a = 5;
$b = 7;
$c = 4;

if($a > $b)
{
    echo "$a jest wieksze od $b";
}

elseif($b > $a)
{
    echo "$b jest większa od $a";
}
else
{
    echo "obie liczby są równe";
}


$cba = [];
array_push($cba,$a,$b,$c);

rsort($cba);
var_dump($cba);

foreach ($cba as $item)
{
    echo $item;
}



