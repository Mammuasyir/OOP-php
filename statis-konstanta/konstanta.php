<?php

//konstanta adalah variabel yang nilainya tidak bisa diubah di tulis dengan kata const

class Lingkaran
{
	public const PI = 3.14;

	public function luas($jari)
	{
		echo self::PI * $jari * $jari . PHP_EOL;
	}
}

$lingkaran = new Lingkaran(); 
$lingkaran->luas(7);



?>