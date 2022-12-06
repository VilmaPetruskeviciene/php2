<?php

$egzaminoRezultatas = rand(1, 10);
// Išvesti rezultatą ir sprendimą ar egzaminas išlaikytas. Mažiausias išlaikymo balas yra 4
if ($egzaminoRezultatas < 4) {
    echo "Egzamono rezultatas yra $egzaminoRezultatas. Neislaikytas.";
} elseif ($egzaminoRezultatas >= 4) {
    echo "Egzamono rezultatas yra $egzaminoRezultatas. Islaikytas.";
}

echo '<br>';

$automobilioGreitis = rand(40, 125);
// Išvesti automobilio greitį ir baudos dydį, jeigu greiti didesnis nei 60. Bauda yra viršytas greitis X 5
if ($automobilioGreitis <= 60) {
    echo "Automobilio greitis yra $automobilioGreitis. Greitis nevirsytas.";
} elseif ($automobilioGreitis > 60) {
    $virsytasGreitis = ($automobilioGreitis - 60) * 5;
    echo "Automobilio greitis yra $automobilioGreitis. Bauda $virsytasGreitis Eu.";
}

echo '<br>';

$dalyvis1 = rand(1, 4);
$dalyvis2 = rand(1, 4);
// Išvesti dalyvių pasirinktus skaičius ir pranešimą "Laimėjo", jeigu dalyvių skaičių suma didesnė nei 6 arba tie skaičiai yra vienodi. Pranešimą "Pralaimėjo" - priešingu atveju
if (($dalyvis1 + $dalyvis2) > 6 || $dalyvis1 === $dalyvis2) {
    echo "Dalyvis1 = $dalyvis1, Dalyvis2 = $dalyvis2. Laimejo!";
} else {
    echo "Dalyvis1 = $dalyvis1, Dalyvis2 = $dalyvis2. Pralaimejo!";
}

echo '<br>';

$Jonas = rand(5, 25);
$Petras = rand(10, 20);
if ($Jonas > $Petras) {
    echo "Jonas: $Jonas, Petras: $Petras. Laimejo Jonas!";
} elseif ($Jonas < $Petras) {
    echo "Jonas: $Jonas, Petras: $Petras. Laimejo Petras!";
} else {
    echo "Jonas: $Jonas, Petras: $Petras. Lygiosios!";
}

echo '<br>';

