<?php 

// static
// dapat menggunakan property dan method tanpa perlu instansiasi

class Penjumlahan {
    public static $a = 0, $b = 0;

    public static function setAngka( $a, $b ) {
        self::$a = $a;
        self::$b = $b;
    }

    public static function getJumlah(){
        return self::$a + self::$b;
    }

}

Penjumlahan::setAngka(6, 5);
echo Penjumlahan::getJumlah();
echo "<hr>";

// nilai pada property static tidak akan berubah/reset ketika melakukan instansiasi berulang kali
class Contoh {
    public static $angka = 1;

    public static function halo(){
        return "Halo. " . self::$angka++ . " Kali" . "<br>";
    }
}

$objs = new Contoh;
echo $objs->halo();
echo $objs->halo();
echo $objs->halo();

$obj2s = new Contoh;
echo $obj2s->halo();
echo $obj2s->halo();
echo $obj2s->halo(); // nilai property angka tidak berubah/mereset

echo "<hr>";

// non-static
// nilai pada property static tidak akan berubah/reset ketika melakukan instansiasi berulang kali
class ContohNonStatic {
    public $angka = 1;

    public function halo(){
        return "Halo. " . $this->angka++ . " Kali" . "<br>";
    }
}

$obj = new ContohNonStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj2 = new ContohNonStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo(); // nilai property angka berubah/mereset