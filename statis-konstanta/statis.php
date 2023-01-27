<?php

class Motor{

    static $roda = 2;
    static $warna = "merah";

    static function jalan() {
        echo "Motor berjalan ke arah selatan" . PHP_EOL;
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