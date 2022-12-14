<?php
//2. Stringai (movie edition)
echo '----------------2. Stringai (movie edition)----------------';
echo '<br>';
echo '----------------1-----------------------';
echo '<br>';

//1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
$vardas = 'Jonas';
$pavarde = 'Jonaitis';
if (strlen($vardas) > strlen($pavarde)) {
    echo $pavarde;
} else {
    echo $vardas;
}

echo '<br>';
echo '----------------2-----------------------';
echo '<br>';
//2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
$vardas2 = 'Jonas';
$pavarde2 = 'Jonaitis';
echo strtoupper("$vardas2 ");
echo strtolower($pavarde2);

echo '<br>';
echo '----------------3-----------------------';
echo '<br>';
//3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
$vardas3 = 'Jonas';
$pavarde3 = 'Jonaitis';
$raides3 = substr($vardas3,0,1).substr($pavarde3,0,1);
echo $raides3;

echo '<br>';
echo '----------------4-----------------------';
echo '<br>';
