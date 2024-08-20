<?php 

class Produk {
    // property
    public  $judul,
                $penulis,
                $penerbit,
                $harga,
                $halaman,
                $waktuMain,
                $tipe;

    // method
    // construct adalah method spesial yang dimana akan langsung dijalankan ketika melakukan instance
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe === "Komik"){
            $str .= " - {$this->halaman} Halaman.";
        } elseif($this->tipe === "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $result = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}}";
        return $result;
    }
}


$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, null, "Komik" );
$produk2 = new Produk( "Uncherted", "Neil Druckman", "Sony Computer", 250000, null, 50, "Game");

// $cetakInfoProduk1 = new CetakInfoProduk();
// $cetakInfoProduk2 = new CetakInfoProduk();

// echo "Komik : " . $cetakInfoProduk1->cetak($produk1);
// echo "<br>";
// echo "Game : " . $cetakInfoProduk2->cetak($produk2);
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();