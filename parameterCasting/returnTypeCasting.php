<?php

// 

class ParameterCasting {

    function returnCast(string $mobil, ?string $motor) : string {
        return "Mobil: $mobil, Motor: $motor";
    }

}

$returnHinting = new ParameterCasting();
echo $returnHinting->returnCast("Honda", "Yamaha");

?>