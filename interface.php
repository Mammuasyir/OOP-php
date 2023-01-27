<?php

//interface adalah class yang hanya berisi deklarasi method saja dan hanya bisa diwariskan

interface Hewan {

    public function getJenis();

}

class Bebek implements Hewan {

    function getJenis() {
        return "Herbivora";
    }
}

class Macan implements Hewan {

    function getJenis() {
        return "Karnivora";
    }
}

$bebek = new Bebek();
echo $bebek->getJenis() . PHP_EOL;

$macan = new Macan();
echo $macan->getJenis();

?>