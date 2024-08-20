<?php 

class Produk {
    // property
    public  $judul,
                $penulis,
                $penerbit,
                $harga;

    // method
    // construct adalah method spesial yang dimana akan langsung dijalankan ketika melakukan instance
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this->jmlHalaman = $halaman;
    }

    public function getInfoLengkap(){
        $str = "Komik : " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoLengkap(){
        $str = "Game : " . parent::getInfoLengkap() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $result = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}}";
        return $result;
    }
}


$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, null, "Komik" );
$produk2 = new Game( "Uncherted", "Neil Druckman", "Sony Computer", 250000, null, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();