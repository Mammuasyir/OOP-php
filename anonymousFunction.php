<?php

class Anonym {

    function introduce($fullname, $action) {
        $fullname = $action ($fullname);
            return "Nama lengkap saya adalah $fullname";
    }
}

$print = new Anonym;
echo $print->introduce("YOunes", function($fullname) {
    return strtoupper($fullname);
});
echo PHP_EOL;

//contoh lambda
$print1 = function ($kata) {
    echo $kata;
};

$print1("ini adalah lambda function");
echo PHP_EOL;

//contoh clousure

$cetak = 'ini adalah closure function';

$word = function() use($cetak){
    echo $cetak;
};

$word();




?>