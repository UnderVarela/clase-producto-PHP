<?php

// Crear una clase denominada Compra que tendrá como propiedades obligatorias un array de objetos Alimento y otro de clase Utensilio. Realizar todas las operaciones necesarias para que imprima un ticket con la compra total.

// BING version:
class Compra {
public $alimentos = array();
public $utensilios = array();

public function imprimirTicket () {
  $total = 0;
  foreach ($this->alimentos as $alimento) {
    $total += $alimento->precio;
    echo $alimento->nombre.": €".$alimento->precio."\n";
  }

  foreach ($this->utensilios as $utensilio) {
    $total += $utensilio->precio;
    echo $utensilio->nombre.": €".$utensilio->precio."\n";
  }
  echo "TOTAL: €".$total;
}

}

$compra = new Compra();

//*********************************************************************************** */



