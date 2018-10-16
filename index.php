<pre> <!-- oznacza tekst preformatowany -->
<?php

//deklarujemy sobie led'a
//język php jest słabo typowany

$led;

//co jest w zmiennej led?

echo "<br>var_dump:";
var_dump($led);
echo "<br>print_r:";
print_r($led);
echo "<br>gettype:";
echo gettype($led);


//cały czas dostajemy komunikat undefinded

//deklarujemy wartosc led
echo "<br>ustawiam true...";
$led = true; //led się świeci

echo "<br>var_dump:";
var_dump($led);
echo "<br>print_r:";
print_r($led);
echo "<br>gettype:";
echo gettype($led);
echo "<br>zmieniam na false...";
$led = false;

echo "<br>var_dump:";
var_dump($led);
echo "<br>print_r:";
print_r($led);
echo "<br>gettype:";
echo gettype($led);

//zamien na odwrotny
$led = !$led;
?>