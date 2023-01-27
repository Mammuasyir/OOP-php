<?php

require __DIR__ . '/Manusia.php';
require __DIR__ . '/Calculator.php';

use Manusia as Manusia;
use objectTypeHinting\Calculator as Calculator;

$yones = new Manusia('YOunes', 100, 40);
$cal1 = new Calculator();
$cal1->hitungJarak($yones);
echo PHP_EOL;

$raji = new Manusia('Raji', 120, 35);
$cal2 = new Calculator();
$cal2->hitungJarak($raji);
echo PHP_EOL;

$farrel = new Manusia('Farrel', 150, 45);
$cal3 = new Calculator();
$cal3->hitungJarak($farrel);

?>