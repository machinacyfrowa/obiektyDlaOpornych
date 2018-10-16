<pre>
<?php
//projektujemy drzwi jako obiekt
class Drzwi {
    private $czyOtwarte = false;
    public $czyZakluczone = true;

    //otworz te konkretnew drzwi
    function otworz() {
        if(!$this->czyZakluczone) {
            $this->czyOtwarte = true;
            echo "Otwarte!";
        }
        else
            echo "Zamek jest zamknięty - użyj klucza!<br>";
    }
    function otworzZamek($klucz) {
        if($klucz == 'AAGiuNNjK') {
            $this->czyZakluczone = false;
            echo "Zamek otwarty!";
        }
        else 
            echo "Masz niewłaściwy klucz<br>";
    }
}

$d = new Drzwi();
var_dump($d);

//

$d->otworz();
var_dump($d);


//$d->czyOtwarte = true; //walimy z buta
//var_dump($d);

$d->otworzZamek("AAGiuNNjK");

$d->otworz();

?>