<?php

class MagicMethod7{


    function coba() {
        return "coba cetak ini" . PHP_EOL;
    }

    function __toString()
    {
        return "kamu belum memanggil method apapun";
    }
}

$cetak = new MagicMethod7;
echo $cetak;

?>