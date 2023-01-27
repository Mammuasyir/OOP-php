<?php

namespace objectTypeHinting;
use Manusia as Manusia;

class Calculator{

    function hitungJarak(Manusia $lari) {
        $stamina = $lari->getStamina();
        $otot = $lari->getotot();

        $jarakMax = $stamina * $otot;

        echo $lari->getNama() . ":" . $jarakMax . "km";
    }
}

?>