<?php

//overriding adalah cara untuk membuat method yang sama dengan method yang ada di class parent
//overloading adalah cara untuk mengubah method yang ada di class parent/modifikasi method yang ada di class parent


class Kelas {

    public $jumlah = 20;

    function getJumlah() {
        return $this->jumlah;
    }
}

class RPL extends Kelas {

    function tambahMurid() {

        //overriding
        $jumlahAnak = parent::getJumlah();

        //overloading
        $jumlahAnak = $jumlahAnak + 3;

        return $jumlahAnak;
    }
}

$bpn = new RPL();
echo $bpn->tambahMurid();

?>