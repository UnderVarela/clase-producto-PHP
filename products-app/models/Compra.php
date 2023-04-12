<?php

require_once(__DIR__.DIRECTORY_SEPARATOR.'Alimento.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'Utensilio.php');

class Compra {
  private array $productos;
  function __construct (Alimento|Utensilio ...$productos) {
    $this->productos = $productos;
  }

  function dimeTotalCompra (): float {
  //   $acumulador = 0;
  //   foreach ($this->productos as $producto) {
  //     $acumulador += $producto->getPrecio();
  //   }
  //   return $acumulador;
  // } otra forma: 
    function sumarTotal ($acumulador, $producto ) {
      return $acumulador + $producto->getPrecio();
    }
  return array_reduce(
    $this->productos,
    "sumarTotal",
    0
  );
}

}

$productos = new Compra(new Alimento('Patatas', 3), new Utensilio('Tuerca', 0.5));
echo $productos-> dimeTotalCompra();