<?php   

class Shell {
    private $ppn = 0,
            $SSuper = 0,
            $SVPower = 0,
            $SVPowerDiesel = 0,
            $SVPowerNitro = 0;
    protected $jumlah = 0,
                $jenis = '';

    public function setPPN($ppn){
        $this->ppn = $ppn;
    }
    
    public function setHarga($SS, $SVP, $SVPD, $SVPN){
        if(is_int($SS) && is_int($SVP) && is_int($SVPD) && is_int($SVPN)) {
            $this->SSuper = $SS;
            $this->SVPower = $SVP;
            $this->SVPowerDiesel = $SVPD;
            $this->SVPowerNitro = $SVPN;
        } else {
            throw new Exception("Parameter harus angka");
        }        
    }

    public function getHarga(){
        if($this->jenis === "SSuper"){
            return $this->SSuper;
        } elseif($this->jenis === "SVPower"){
            return $this->SVPower;
        } elseif($this->jenis === "SVPowerDiesel"){
            return $this->SVPowerDiesel;
        } elseif($this->jenis === "SVPowerNitro"){
            return $this->SVPowerNitro;
        } else {
            throw new Exception("Jenis bahan bakar tidak valid");
        }
    }

    public function getPPN(){
        return $this->ppn;
    }

    public function setJenis($jenis){
        $this->jenis = $jenis;
    }

    public function getJenis(){
        return $this->jenis;
    }

    public function setJumlah($jumlah) {
        $this->jumlah = $jumlah;
    }

    public function getJumlah(){
        return $this->jumlah;
    }

}

class Beli extends Shell {

    public function bayar(){
        $result = $this->getHarga() * $this->getJumlah();
        $bayar = $result + ($result * $this->getPPN() / 100);
        return $bayar;
    }

    public function cetakPembelian() {
        echo "<center>";
        echo "<p>Anda membeli bahan bakar minyak tipe {$this->getJenis()}</p>";
        echo "<p>Dengan jumlah : {$this->getJumlah()} Liter</p>";
        echo "<p>Total yang harus anda bayar Rp. " . number_format($this->bayar(), 0, ',', '.'). "</p>";
        echo "</center>";
    }
}
