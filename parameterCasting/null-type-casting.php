<?php

// Null Type Casting berfungsi untuk mengecek apakah parameter yang diinputkan null atau tidak

class ParameterCasting {

    function nullCast(?string $mobil, ?string $motor) {
        echo "Mobil: $mobil, Motor: $motor";
    }

}

$nullHinting = new ParameterCasting();
$nullHinting->nullCast(null, null );

?>