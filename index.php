<pre> <!-- oznacza tekst preformatowany -->
<?php

//deklarujemy sobie kolorowego led'a
//deklarujemy kolor jako skladowa RGB 0-255
$led = array(
    'R' => 0,
    'G' => 0,
    'B' => 0,
);
//dioda jest wylaczona

var_dump($led);

// w jednej zmiennej 3 wartosci
$led['R'] += 125;
$led['B'] += 125;

var_dump($led);

//dodajemy element tablicy
$led['wlaczony'] = true;

var_dump($led);

function pokazKolorHTML($led){
    $bufor = "#";
    $bufor .= zamienNaHex($led['R']);
    $bufor .= zamienNaHex($led['G']);
    $bufor .= zamienNaHex($led['B']);
    return $bufor;
}

function zamienNaHex($liczba) {
    $sz = floor($liczba / 16);
    $reszta = $liczba % 16;
    $literki = array(10 => 'A', 11 => 'B', 12 => 'C',
                        13 => 'D', 14 => 'E', 15 => 'F');
    if($sz > 9) $sz = $literki[$sz];
    if($reszta > 9) $reszta = $literki[$reszta];
    return $sz.$reszta; //zwracamy ilosc szesnastek i jedynek
}

echo pokazKolorHTML($led);

?>