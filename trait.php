<?php 

trait Sayuran {

    function sayuran() {
        return "ini adalah sayur kol";
    }
}

trait LaukPauk {

    function lauk() {
        return "ini adalah ikan asin";
    }

}

class MakanSiang {
    use Sayuran, LaukPauk;
}

$makananYounes = new MakanSiang;
echo $makananYounes->sayuran();
echo PHP_EOL;
echo $makananYounes->lauk();

?>