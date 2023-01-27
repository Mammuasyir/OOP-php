<?php

//abstract class adalah class yang tidak bisa di instansiasi (tidak bisa di buat object)
//abstract class adalah class yang hanya bisa diwariskan

abstract class Mobil5 {

    public $roda = 4;

    abstract function getRoda();

}

class Fortuner extends Mobil5 {

    function getRoda() {
        return $this->roda;
    }

}

$fortuner = new Fortuner();
echo $fortuner->getRoda();

?>