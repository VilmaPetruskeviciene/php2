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
//7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
$str71 = 'An American in Paris';
$str72 = 'Breakfast at Tiffany\'s';
$str73 = '2001: A Space Odyssey';
$str74 = 'It\'s a Wonderful Life';
echo preg_replace('#[aeiouy]{1}#i', '', $str71);
echo '<br>';
echo preg_replace('#[aeiouy]{1}#i', '', $str72);
echo '<br>';
echo preg_replace('#[aeiouy]{1}#i', '', $str73);
echo '<br>';
echo preg_replace('#[aeiouy]{1}#i', '', $str74);

echo '<br>';
echo '----------------8-----------------------';
echo '<br>';
//8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
$str8 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $str8;
echo '<br>';
preg_match_all('#[1-9]#', $str8, $match);
print_r($match[0][0]);

echo '<br>';
echo '----------------9-----------------------';
echo '<br>';
//9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
$str91 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str92 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$count91 = 0;
preg_match_all('/[\S]{5,}/', $str91, $match91);
//print_r($match91[0]);
echo '<br>';
echo sizeof($match91[0]);
echo '<br>';
preg_match_all('/[\S]{5,}/', $str92, $match92);
//print_r($match92[0]);
echo '<br>';
echo sizeof($match92[0]);

echo '<br>';
echo '----------------10-----------------------';
echo '<br>';
//10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
$length10 = 3;
$str10 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, $length10);
echo $str10;

echo '<br>';
echo '----------------11-----------------------';
echo '<br>';
//11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)
