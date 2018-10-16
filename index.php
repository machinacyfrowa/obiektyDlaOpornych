<pre> <!-- oznacza tekst preformatowany -->
<?php

//deklarujemy sobie led'a
//język php jest słabo typowany
//deklarujemy jako wylaczony
$led = false;

var_dump($led);

function przelaczLed($led) {
    //zmienia wartosc led ale tylko wewnatrz funkcji
    $led = !$led;
}

function przelaczLed2() {
    //zmienia wartość led globalnie (tego z 7 linijki)
    global $led;
    $led = !$led;
}

function przelaczLed3(&$led) {
    //& oznacza przeslanie przez referencje czyli 
    //pracujemy na orginalnej zmiennej
    $led = !$led;
}
function przelaczLed4($led) {
    //zwraca przeciwienstwo
    return !$led;
}

przelaczLed3($led);

var_dump($led);

$led = przelaczLed4($led);

?>