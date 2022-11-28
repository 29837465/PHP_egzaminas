<?php

/*2. Grąžinkite visų skaičių, esančių $numbers2 masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercises2($multiplication)
{
    return array_reduce($multiplication, function ($items, $array) {
        foreach ($array as $number)
        $items *= $number;
        return $items;
        },
        1);
}

echo exercises2($numbers2);



