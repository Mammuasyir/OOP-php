<?php

//enkapulasi adalah cara untuk menyembunyikan property dan method dari class lain yang tidak perlu tahu detail dari class tersebut

class Mobil3 {

    private $roda = 4;

    protected function roda() {
        return $this->roda + 1;
    }    

    function getRoda() {
        return $this->roda();
    }

}

$fortuner = new Mobil3();
echo $fortuner->getRoda();

?>