<?php

class Mobil {

    public $roda;
    public $warna;

    public function jalan($arah = "depan") {
        echo "Mobil berjalan ke arah $arah" . PHP_EOL;
    }
}

//fortuner adalah objek dari class Mobil
$fortuner = new Mobil();
$fortuner->roda = 4;

echo $fortuner->jalan();
echo $fortuner->roda . PHP_EOL;
echo $fortuner->warna = "Merah" . PHP_EOL;

//bajaj adalah objek dari class Mobil
$bajaj = new Mobil();
$bajaj->roda = 3;

echo $bajaj->jalan("samping");
echo $bajaj->warna = "oren" . PHP_EOL;
echo $bajaj->roda;



?>