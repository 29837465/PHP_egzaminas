<?php

/*1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercises1($number): int
{
    $evenNumbersSum = 0;
    foreach ($number as $key => $value){
        if ($value % 2 == 0) {
            $evenNumbersSum += $value;
        }
    }
    return $evenNumbersSum;
}

echo(exercises1($numbers));

