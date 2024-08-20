<?php   

// define('NAMA', 'Fikri Akbar Pratama');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// define -> tidak bisa dipakai di dalam class
// const -> bisa dipakai di dalam class
class Coba {
    // define('NAMA', 'Fikri Akbar Pratama');
    const NAMA = 'Fikri Akbar Pratama';
    const UMUR = 16;
}

echo Coba::NAMA;
echo "<br>";
echo Coba::UMUR;

echo "<hr>";

echo "Magic Constant";
echo "<br>";
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
function coba(){
    return __FUNCTION__;
}
echo coba();
echo "<br>";
class CobaClass {
    public static $class = __CLASS__;
}
echo CobaClass::$class;
echo "<br>";
echo __TRAIT__;
echo "<br>";
    
