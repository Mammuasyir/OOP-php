<?php


//Contoh 1
class Errorable {

    static function calculate(int $number){
        if($number == 0) {
            throw new Exception("angka tidak boleh 0");
        }
        return ($number % 0);
    }

    static function checkNumber(int $angka1, $angka2) {
        if($angka1 == 2 || $angka2 == 1) {
            throw new Exception("angka pertama tidak boleh 2 dan angka kedua tdak boleh 1");
        } else {
            return $angka1 + $angka2;
        }
    }
}

try {
    Errorable::calculate(7);
}catch(Exception $e){
    echo $e->getMessage();
    echo PHP_EOL;
}
catch (DivisionByZeroError $e) {
    echo "gaboleh pembagian pake 0 mas";
    echo PHP_EOL;
}

try {
    echo Errorable::checkNumber(5,7);
} catch(Exception $e){
    echo "Pesan :" . $e->getMessage(); 
}

echo PHP_EOL;
echo "Program berjalan normal";

//contoh 2



?>