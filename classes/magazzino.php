<?php
class Magazzino{
    public $città;
    public $prodotti;
    public $quant_prodotti;

    public function __construct($_città , $_prodotti, $_quant_prodotti){
        $this->città = $_città;
        $this->prodotti = $_prodotti;
        $this->qunant_prodotti = $_quant_prodotti;

    }

    public function show(){
        echo "<h2> Città: $this->città </h2>";
        echo "<span> Tipologia prodotti: $this->prodotti </span>";
        echo "- <span> Quantità prodotti: $this->qunant_prodotti </span>";
    }
}
$magazzino1 = new Magazzino('Napoli' , 'Pasta' , 10);
$magazzino2 = new Magazzino('Avellino', 'Legumi' , 50);
$magazzino3 = new Magazzino('Salerno' , 'Frutta' , 30);

?>