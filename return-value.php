<?php

//self itu bermakna nama class itu sendiri
class Lingkaran {

    const PI = 3.14;
    public $jari;

    function luas($jari) {
        return self::PI * $jari * $jari . PHP_EOL;
    }
}

$lingkaran = new Lingkaran();
echo $lingkaran->luas(10);

?>