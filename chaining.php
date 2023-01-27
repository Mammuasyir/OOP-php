<?php

//chaining adalah cara untuk memanggil method secara berurutan

class Uang {

    public $uangUtama = 1000;

    function tambah($uang) {
        $this->uangUtama += $uang;
        return $this;
    }

    function kurang($uang) {
        $this->uangUtama -= $uang;
        return $this;
    }

    function getUang() {
        return $this->uangUtama;
    }
}

$dollar = new Uang();
echo $dollar->tambah(10000)->kurang(2000)->getUang();

?>