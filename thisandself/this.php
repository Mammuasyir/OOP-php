<?php

//this adalah keyword yang mengacu pada object yang sedang berjalan

class Motor{

    private $roda = 2;
    public $warna = "merah";

    function jalan($roda) {
        echo "Motor berjalan ke arah selatan dengan roda ", $this->roda = $roda . PHP_EOL;
    }

    //cara memanggil properti static di dalam function
    function lihat() {
        echo "Motor cakep itu berwarna ", $this->warna . PHP_EOL;
    }

}

//object
$supra = new Motor();
$supra->jalan(2);
$supra->lihat();

$yamaha = new Motor();
$yamaha->jalan(3);
?>