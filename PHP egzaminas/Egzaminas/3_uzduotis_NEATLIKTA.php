<?php

/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

//naudoti array_map arba array_merge

function exercises3(array $holidays)
{
    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'Paris' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        $trip = 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;

        echo $trip;
    }

    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'New York' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;
    }

    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'Sydey' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;
    }

    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'Beijing' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;
    }
}

// var_dump($holidays);

echo (exercises3($holidays));