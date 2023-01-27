<?php

//Late static binding berfungsi untuk mengakses method dan property dari classnya sendiri, walaupun dia merupakan class child

//contoh 1
class LateStaticbinding{

    static function getClassName() {
        return static::class;
    }
}

class Child extends LateStaticbinding{}


echo LateStaticbinding::getClassName();
echo PHP_EOL;
echo Child::getClassName();

//contoh 2

class Pisau {

    static function setNamePisau() {
        return "ini pisau damaskus";
    }

    static function getNamePisau() {
        return static::setNamePisau();
    }
}

class PisauKecil extends Pisau {

    static function setNamePisau()
    {
        return "ini pisau tokyo";
    }
}

echo Pisau::getNamePisau();
echo PHP_EOL;
echo PisauKecil::getNamePisau();

?>