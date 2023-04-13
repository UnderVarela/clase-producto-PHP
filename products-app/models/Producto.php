<?php

abstract class Producto {
  public int $orden;
  protected $nombreProducto;
  protected float $precio;
  private string $id;
  
  private DateTime $fechaAlta;
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

  

// Acceder a variables protegidas o privadas, para eso usamos un getter:

function getId (): string {
  return $this->id;

}

function getPrecio (): float {
  return $this->precio;
}

function getNombreProducto () : string {
  return $this->nombreProducto;
}

static function aplicarDescuento25 (float $precio): float {
  return $precio * 0.75;
}

function __toString () {
  return join(' | ', [$this->id, $this->nombreProducto, $this->precio.' €']);
} 

abstract function dimeTipo (): string;

}

