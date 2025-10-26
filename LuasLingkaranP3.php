<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari = 1){
        $this->jari = $isiJari;
    }

    public function tampil($nama = "roda") {
        $rumus = new LuasLingkaran()::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} adalah: ", $rumus;
    }

    public static function testing(){
        echo"ini dari static";
    }

    public function __destruct(){
        echo "udah ah cape";
    }
}


$lingkaran = new LuasLingkaran();

$lingkaran->tampil("ban");

LuasLingkaran::testing();
echo ".."

?>