<?php
class Ordine {
  private $prodotti = [];
  private $totale;

  public function __construct($prodotti){
    $this->prodotti = $prodotti;
    $this->totale = $this->calcolaTotale($prodotti);
  }

  private function calcolaTotale($prodotti){
    $totale = 0;
    for ($i=0; $i < count($prodotti); $i++) {
      $totale += $prodotti[$i]['quantity'] * $prodotti[$i]['product']->getPrice();
    }
  }
}

 ?>
