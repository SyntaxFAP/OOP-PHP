<?php 

interface InfoProduk {
    public function getInfoLengkap();
}

abstract class Produk {
    // property
    protected  $judul,
                $penulis,
                $penerbit,
                $harga,
                $diskon = 0;

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

    public function setJudul($judul){        
        $this->judul = $judul;
    }
    public function getJudul(){        
        return $this->judul;
    }
    public function setPenulis($penulis){        
        $this->penulis = $penulis;
    }
    public function getPenulis(){        
        return $this->penulis;
    }
    public function setPenerbit($penerbit){        
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){        
        return $this->penerbit;
    }
    public function setDiskon($diskon){        
        $this->diskon = $diskon;
    }
    public function getDiskon(){        
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    abstract public function getInfo();
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga);
        $this->jmlHalaman = $halaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoLengkap(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }  

    public function getInfoLengkap(){
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "Daftar Produk : <br>";

        foreach ( $this->daftarProduk as $produk ) {
                $str .= "- {$produk->getInfoLengkap()} <br>";
        }

        return $str;

    }
}


$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, null, "Komik" );
$produk2 = new Game( "Uncherted", "Neil Druckman", "Sony Computer", 250000, null, 50, "Game");

$daftarProduk = new CetakInfoProduk;
$daftarProduk->tambahProduk($produk1);
$daftarProduk->tambahProduk($produk2);
echo $daftarProduk->cetak();