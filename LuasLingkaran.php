<?php

namespace App\Math;

class LuasLingkaran {
    public const phi = 3.14;
    private int $jari;

    public function __construct($isiJari = 1){
        $this->jari = $isiJari;
    }

    public function tampil($nama) {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "<br>Lingkaran {$nama} adalah: ", $rumus;
    }

    public static function testing(){
        echo "<br>ini dari static";
    }

    public function __destruct(){
        echo "<br>udah ah cape";
    }
}

?>