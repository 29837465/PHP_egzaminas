<?php

/*
 6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

echo 'Prašau įvesti pirmą skaičių: ';
fscanf(STDIN, "%d", $firstNumber);

if (isset($firstNumber) === false || is_numeric($firstNumber) === false) {
    echo 'Tai ne skaičius!' . PHP_EOL;
    exit(1);
}

echo 'Prašau įvesti antrą skaičių: ';
fscanf(STDIN, "%d", $secondNumber);

if (isset($secondNumber) === false || is_numeric($secondNumber) === false) {
    echo 'Tai ne skaičius!' . PHP_EOL;
    exit(1);
}

$calculation = ($firstNumber * $secondNumber)**2;

echo 'Jūsų įvestų skaičių ' . $firstNumber . ' ir ' . $secondNumber . ' sandauga ir pakelta kvadratu yra: ' . number_format((float)$calculation, 0, ".", "");