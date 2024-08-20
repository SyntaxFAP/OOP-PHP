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


$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000 );
$produk2 = new Produk( "Uncherted", "Neil Druckman", "Sony Computer", 250000 );

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();