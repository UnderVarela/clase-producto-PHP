<?php

class Producto {
  private string $id;
  private $nombreProducto;
  private float $precio;
  
  private DateTime $fechaAlta;
  static private int $orden;
  static private int $serie = 0;

function __construct (string $nombreProducto, float $precio,) {
  $this->orden = ++Producto::$serie;
  // Generar ID de forma automática: coge las 2 primeras letras en mayusculas, 
  // añade un guion y añade el orden:
  $this->id = strlen($nombreProducto) > 1 ? strtoupper(substr($nombreProducto, 0, 2)).'-'.$this->orden : '##-'.$this->orden;
  $this->nombreProducto = $nombreProducto;
  $this->precio = $precio;
  $this-> fechaAlta = new DateTime();
}

  
function __toString () {
  return join('|', [$this->id, $this->nombreProducto, $this->precio, $this->fechaAlta->format('m-d-Y H:m:i')]);
} 

// Acceder a variables protegidas o privadas, para eso usamos un getter:
function getPrecio (): float {
  return $this->precio;
}

static function aplicarDescuento25 (float $precio): float {
  return $precio * 0.75;
}

}

class Alimento extends Producto {
  private bool $tieneCaducidad;
  private DateTime $fechaCaducidad;

 
}