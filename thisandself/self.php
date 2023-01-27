<?php

//self itu bermakna nama class itu sendiri
class Lingkaran {

    const PI = 3.14;
    public $jari;

    function luas($jari) {
        echo self::PI * $jari * $jari . PHP_EOL;
    }
}

$lingkaran = new Lingkaran();
$lingkaran->luas(10);

?>