<?php

//constructor adalah method yang akan dijalankan pertama kali ketika object dibuat
class Mobil2 {

    public $roda;
    public $warna;

    function __construct($roda, $warna) {
        $this->roda = $roda;
        $this->warna = $warna;
    }

    function jalan($arah = "depan") {
        echo "Mobil berjalan ke arah $arah" . PHP_EOL;
    }
}

//fortuner adalah objek dari class Mobil
$fortuner = new Mobil2(4, "Merah");

echo $fortuner->jalan();
echo $fortuner->roda. PHP_EOL;
echo $fortuner->warna. PHP_EOL;


?>