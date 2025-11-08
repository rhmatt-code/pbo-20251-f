<?php 

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(5);
// $lingkaran->jari = 5;
$lingkaran->tampil('ban');

LuasLingkaran::testing();

?>