<?php declare(strict_types=1);

//scalar type hinting berfungsi untuk menentukan tipe data yang diterima oleh parameter fungsi atau method

class ParameterCasting{

    function stringCast(string $mobil) {
        echo $mobil;
    }

    function intCast(int $jumlah) {
        echo $jumlah;
    }

    function arrayCast(array $motor) {
        //cetak semua isi array
        echo $motor[2];
    }

}

$scalarHinting = new ParameterCasting();
$scalarHinting->stringCast("aku");
echo PHP_EOL;
$scalarHinting->intCast(100);
echo PHP_EOL;
$scalarHinting->arrayCast(["Honda", "Yamaha", "Suzuki"]);

?>