<?php
class Mobil {
    // Deklarasi Properti
    private $merk;
    private $warna;

    // Function setter untuk mengubah merk
    public function setMerk($merk){
        $this->merk = $merk;
    }
    // function getter untuk menampilkan merk 
    public function getMerk(){
        echo $this->merk;
    }
    public function setWarna($warna){
        $this->warna = $warna;        
    }
    public function getWarna(){
        echo $this->merk;       
    }
    public function hidupkanMesin(){
        echo "mesin mobil dihidupkan";
    }
    public function jalan(){
        echo "mobil berjalan";
    }
}

$toyota = new Mobil();
$toyota->setMerk("Toyota");
$toyota->setWarna("hitam");
$toyota->getMerk();
echo '<br>';
$toyota->hidupkanMesin();
echo '<br>';
$toyota->jalan();
?>