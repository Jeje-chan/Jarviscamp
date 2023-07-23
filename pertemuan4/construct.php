<?php
class Laptop{
    public $merk;
    public $processor;
    public $memori;

    public function __construct($merk, $procie, $memori){
        $this->merk = $merk;
        $this->processor = $procie;
        $this->memori = $memori;
    }
    public function desc(){
        return "Merk laptop ini adalah $this->merk,
        dengan processor $this->processor,
        dan RAM $this->memori";
    }
}
$lenovo = new Laptop("Lenovo", "Intel i5 gen 7", "8 GB");
echo $lenovo->desc();
?>