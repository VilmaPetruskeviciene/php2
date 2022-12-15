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
//4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
$vardas4 = 'Jonas';
$pavarde4 = 'Jonaitis';
$raides4 = substr($vardas4,(strlen($vardas4)-3),3).substr($pavarde4,(strlen($pavarde4)-3),3);
echo $raides4;

echo '<br>';
echo '----------------5-----------------------';
echo '<br>';
//5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
$str5 = 'An American in Paris';
$reg5 = '/[Aa]/m';
echo preg_replace($reg5, '*', $str5);

echo '<br>';
echo '----------------6-----------------------';
echo '<br>';
//6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
$str6 = 'An American in Paris';
echo (substr_count($str6,'A') + substr_count($str6,'a'));

echo '<br>';
echo '----------------7-----------------------';
echo '<br>';
