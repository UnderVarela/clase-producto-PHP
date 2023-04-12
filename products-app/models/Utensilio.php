<?php

if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'Producto.php'))
require_once(__DIR__.DIRECTORY_SEPARATOR.'Producto.php');
else
die('Falta el fichero Producto.php');


class Utensilio extends Producto {
  public string $tipo = 'Genérico';
  function dimeTipo(): string {
    return 'Tipo de utensilio:'.$this->tipo;
  }

  function __toString() :string {
    $toStringPadre = parent::__toString();
    return $toStringPadre.' | '.$this->tipo;
  }
}