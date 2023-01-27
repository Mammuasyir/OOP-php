<?php

//destructor adalah method yang akan dijalankan terakhir

class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo "ini adalah hal terakhir yang dijalankan";
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->name;


?>