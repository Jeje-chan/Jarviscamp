<?php

class Kendaraan{
    public $bahan_bakar;
    public  $merk;

    public function __construct($bahan_bakar, $merk)
    {
        $this -> bahan_bakar = $bahan_bakar;
        $this -> merk = $merk;
    }
    public function jumlahBahanBakar(){
        echo "Kendaraan ini memiliki kapasitas bahan bakar sebanyak $this->bahan_bakar";
    }
}
class truk extends Kendaraan {
    public $jarak;

    public function __construct($bahan_bakar, $merk, $jarak)
    {
        parent::__construct($bahan_bakar, $merk);
        $this->jarak = $jarak;
    }
    public function maxJarak(){
        echo "Maksimal Jarak dalam sekali pengisian bahan bakar adalah $this->jarak";
    }
}

$truk = new Truk("20 liter", "Mitsubishi", "1000 km");
echo $truk->merk;
echo "<br>";
$truk->jumlahBahanBakar();
echo "<br>";
$truk->maxJarak();
?>