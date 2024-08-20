<?php 

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