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

//Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
//“Laimėjo: laimėtojo vardas”;
//Taškų kiekį generuokite funkcija rand();
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
echo '---------------------------------';
//1. Kintamieji ir sąlygos
//Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).
echo '---------------------------------';
echo '<br>';
//1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
$vardas = 'Vilma';
$pavarde = 'Vilma';
$gimimoMetai = 2000;
$dabarMetai = 2022;
$amzius = $dabarMetai - $gimimoMetai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).";

echo '<br>';
echo '---------------------------------';
echo '<br>';
//2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
$skaicius1 = rand(0, 4);
$skaicius2 = rand(0, 4);
if ($skaicius1 == 0 || $skaicius2 == 0) {
    echo 'Dalyba is nulio negalima.';
} elseif ($skaicius1 > $skaicius2) {
    echo round(($skaicius1 / $skaicius2), 2);
} else {
    echo round(($skaicius2 / $skaicius1), 2);
}

echo '<br>';
echo '---------------------------------';
echo '<br>';
//3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
echo $sk31 = rand(0, 25);
echo '<br>';
echo $sk32 = rand(0, 25);
echo '<br>';
echo $sk33 = rand(0, 25);
echo '<br>';
if ($sk31 > $sk32 && $sk31 < $sk33) {
    echo $sk31;
} 
elseif ($sk31 < $sk32 && $sk31 > $sk33) {
    echo $sk31;
}
elseif ($sk32 > $sk31 && $sk32 < $sk33) {
    echo $sk32;
} 
elseif ($sk32 < $sk31 && $sk32 > $sk33) {
    echo $sk32;
}
elseif ($sk33 > $sk31 && $sk33 < $sk32) {
    echo $sk33;
} 
elseif ($sk33 < $sk31 && $sk33 > $sk32) {
    echo $sk33;
}

echo '<br>';
echo '---------------------------------';
echo '<br>';
//4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.
echo $a = rand(1, 10);
echo '<br>';
echo $b = rand(1, 10);
echo '<br>';
echo $c = rand(1, 10);
echo '<br>';
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Galima sudaryti trikampi.';
} else {
    echo 'Negalima sudaryti trikampio.';
}

echo '<br>';
echo '---------------------------------';
echo '<br>';
//5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
echo $sk51 = rand(0, 2);
echo '<br>';
echo $sk52 = rand(0, 2);
echo '<br>';
echo $sk53 = rand(0, 2);
echo '<br>';
echo $sk54 = rand(0, 2);
echo '<br>';


echo '<br>';
echo '---------------------------------';
echo '<br>';
//6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
$sk61 = rand(1, 6);
echo "<h$sk61>$sk61</h$sk61>";

echo '<br>';
echo '---------------------------------';
echo '<br>';
//7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
