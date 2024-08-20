<?php 

class Produk {
    // property
    public  $judul,
                $penulis,
                $penerbit,
                $harga;

    // method
    // construct adalah method spesial yang dimana akan langsung dijalankan ketika melakukan instance
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $result = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}}";
        return $result;
    }
}


$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000 );
$produk2 = new Produk( "Uncherted", "Neil Druckman", "Sony Computer", 250000 );

$cetakInfoProduk1 = new CetakInfoProduk();
$cetakInfoProduk2 = new CetakInfoProduk();

echo "Komik : " . $cetakInfoProduk1->cetak($produk1);
echo "<br>";
echo "Game : " . $cetakInfoProduk2->cetak($produk2);