<?php

//inheritance adalah cara untuk membuat class baru dari class yang sudah ada sebelumnya dengan mewarisi semua property dan method dari class tersebut

//class utama
class Animal {

    private $jenis;

    public function setJenis($jenis) {
        return $this->jenis = $jenis;
    }

    public function getJenis() {
        return $this->jenis;
    }
}

//class turunan

class Kucing extends Animal {
}

class Kambing extends Animal {}


$kitty = new Kucing();
$kitty->setJenis("Karnivora");

$mbek = new Kambing();
$mbek->setJenis("Herbivora");

echo $kitty->getJenis() . PHP_EOL;
echo $mbek->getJenis() . PHP_EOL;

?>
