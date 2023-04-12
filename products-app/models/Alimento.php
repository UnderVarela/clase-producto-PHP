<?php

// Crear una clase Alimento que herederará los campos anteriores. Se le añadirá un campo privado más de tipo boolean denominado tieneCaducidad y otro de tipo DateTime que insertemos la fecha de caducidad. Crear un método abstracto en la clase Producto del ejercicio anterior llamado dimeTipo en que se nos indicará el tipo de producto. En caso del alimento nos indicará si este producto tiene caducidad o no. En caso de tener caducidad indicar cuántos días faltan para su caducidad.

if(file_exists(__DIR__.DIRECTORY_SEPARATOR.'Producto.php'))
  require_once(__DIR__.DIRECTORY_SEPARATOR.'Producto.php');
else
  die('Falta el fichero Producto.php');


class Alimento extends Producto {
  private bool $tieneCaducidad;
  private ?DateTime $fechaCaducidad;

  function __construct (string $nombre, float $precio, ?bool $caduca = null, ?DateTime $fechaCaducidad = null) {
    parent::__construct($nombre, $precio); // Hereda metodo constructor del padre. Podrias poner Producto:: en vez de parent:: pero no es lo aconsejable. 
    $this->tieneCaducidad = $caduca??false;
    $this->fechaCaducidad = $fechaCaducidad;
  }

  public function setTieneCaducidad(bool $si = true) {
    $this->tieneCaducidad = $si;
  }

  public function getTieneCaducidad (): bool {
    return $this->tieneCaducidad;
  }

  public function dimeTieneCaducidad (): string {
    return $this->tieneCaducidad ? 'Tiene caducidad' : 'No tiene caducidad';
  }

  function dimeTipo(): string {
    if($this->fechaCaducidad) {
      $intervalo = date_diff($this->fechaCaducidad, new Datetime());
      $dias = $intervalo->format('%r%a');
    }


    $caducidad = $this->tieneCaducidad 
                 ? 'Faltan '.$dias.' días para caducar.'
                 : 'No tiene caducidad';
    return $caducidad;
  }
 
}


