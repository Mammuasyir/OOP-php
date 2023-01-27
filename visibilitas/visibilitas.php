<?php

//visibilitas private hanya bisa diakses di dalam class itu sendiri, tidak bisa diakses di luar class
//visibilitas protected hanya bisa diakses di dalam class itu sendiri dan class turunannya
//visibilitas public bisa diakses di luar class dan didalam class itu sendiri
//default sama dengan public

class Mobil
{
	protected $roda = 4;

	private $warna = "merah";

	public function jalan()
	{
		echo "Mobil berjalan berwarna", $this->warna;
	}

}

$avanza = new Mobil();

echo $avanza->jalan() . PHP_EOL; 
//tidak bisa diakses karena visibilitasnya protected
echo $avanza->roda . PHP_EOL;