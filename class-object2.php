<?php

class Koneksi {

    public function connect($username, $password, $port = 3306, $admin = "root") {
        echo "Username: $username" . PHP_EOL;
        echo "Password: $password" . PHP_EOL;
        echo "Port: $port" . PHP_EOL;
        echo "Admin: $admin" . PHP_EOL;
    }

}

$koneksi = new Koneksi();
$koneksi->connect("admin", "");

?>