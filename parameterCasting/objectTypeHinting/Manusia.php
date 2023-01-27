<?php

class Manusia {

    private $nama;
    private $stamina;
    private $otot;

    function __construct($nama, $stamina, $otot) {
        $this->nama = $nama;
        $this->stamina = $stamina;
        $this->otot = $otot;
    }

    function getNama() {
        return $this->nama;
    }

    function getStamina() {
        return $this->stamina;
    }

    function getotot() {
        return $this->otot;
    }

}

?>