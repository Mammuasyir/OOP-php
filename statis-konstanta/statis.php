<?php

// use Motor as GlobalMotor;

class Motor{

    static $roda = 2;
    static $warna = "merah";

    public $cc = 1000;

    static function jalan() {
        echo "Motor berjalan ke arah selatan dengan cc "; 
        echo (new Motor())->cc . PHP_EOL;
    }

    //cara memanggil properti static di dalam function
    static function lihat() {
        echo "Motor cakep itu berwarna ", Motor::$warna . PHP_EOL;
    }

}

//cara statis
echo Motor::$roda . PHP_EOL;
echo Motor::jalan() . PHP_EOL;
echo Motor::$roda = 3 . PHP_EOL;
echo Motor::lihat() . PHP_EOL;

?>