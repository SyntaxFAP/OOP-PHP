<?php 

require_once "App/init.php";

// $produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, null, "Komik" );
// $produk2 = new Game( "Uncherted", "Neil Druckman", "Sony Computer", 250000, null, 50, "Game");

// $daftarProduk = new CetakInfoProduk;
// $daftarProduk->tambahProduk($produk1);
// $daftarProduk->tambahProduk($produk2);
// echo $daftarProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();