<?php

//__call() berfungsi untuk memanggil method yang visibilitasnya private di dalam object

class Motor {

    private function jalan(int $cc) {
        echo "Motor berjalan dengan cc $cc" . PHP_EOL;
    }

    function __call($name, $arguments)
    {
        if('jalan' === $name) {
            $this->jalan($arguments[1]);
        } else {
            throw new Exception("Ini  salah");
        }
    }
}

$revo = new Motor();
$revo->jalan(1000, 90, 30, 40);

//callStatic ---->> tidak bisa digunakan
// class Motor5 {

//     private function jalan(int $cc) {
//         echo "Motor berjalan dengan cc $cc" . PHP_EOL;
//     }

//     static function __callStatic($name, $arguments)
//     {
//         if('jalan' === $name) {
//             self::jalan($arguments[1]);
//         } else {
//             throw new Exception("Ini  salah");
//         }
//     }
// }

// Motor5::jalan(100, 20, 30);

?>