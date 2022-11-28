<?php

/*
 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/

//Naudoti fukciją, kuri vydo output'ą į failą. "append mode?"

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

function exercises4(array $holidays)
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
    }

    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'New York' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        $trip = 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;
    }

    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'Sydey' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        $trip = 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;
    }

    foreach ($holidays as $holiday) {
        if ($holiday['destination'] === 'Beijing' && $holiday['price'] === null) {
            break;
            // echo 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL;
            $destination = $holiday['title'];
            $price = $holiday['price'];
        }
        
        $trip = 'Detination: ' . $holiday['destination'] . '.' . PHP_EOL . 'Titles: ' . 
        $destination . '.' . PHP_EOL . 'Total: ' . $price . '.' . PHP_EOL . '************' . PHP_EOL;
    }
}

$writeToFile = fopen($trip, "w") or die('Can\' open file');
fwrite($trip . PHP_EOL);
fclose($trip);

$trip = fopen($writeToFile, "r") or die('Can\' open file');
echo fread($trip, filesize($writeToFile));
fclose($trip);

echo (exercises4($holidays));