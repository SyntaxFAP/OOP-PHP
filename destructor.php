<!-- fungsi dijalankan secara otomatis setelah semua statement dijalankan -->
<?php 

class Destructor {
    
    public function __construct()
    {
        echo "laptop dinyalakan";
    }

    public function maenValorant(){
        echo "Login Valo";
        echo "<br>";
        echo "maenValo";
        echo "<br>";
        echo "Kalah";
    }

    public function __destruct()
    {
        echo "Laptop dimatikan";
    }
 
}


$obj = new Destructor;
echo "<br>";
$obj->maenValorant();
