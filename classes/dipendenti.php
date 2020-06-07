<?php

include_once __DIR__ .'/magazzino.php';

class Dipendenti extends Magazzino{
    public $quantità;
    public $ore_lavoro;

    public function __construct($_quantità , $_ore_lavoro){

        $this->quantità= $_quantità;
        $this->ore_lavoro= $_ore_lavoro;
    }

    public function show(){
        echo "- <span>Quantità dipendenti: $this->quantità - Ore di lavaoro: $this->ore_lavoro</span>";
    }
}

$dipendenti1 = new Dipendenti(500 , 8);
$dipendenti2 = new Dipendenti(655, 10);
$dipendenti3 = new Dipendenti(250, 7);
?>