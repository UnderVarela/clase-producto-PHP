<?php

// Crear una clase Alimento que herederará los campos anteriores. Se le añadirá un campo privado más de tipo boolean denominado tieneCaducidad y otro de tipo DateTime que insertemos la fecha de caducidad. Crear un método abstracto en la clase Producto del ejercicio anterior llamado dimeTipo en que se nos indicará el tipo de producto. En caso del alimento nos indicará si este producto tiene caducidad o no. En caso de tener caducidad indicar cuántos días faltan para su caducidad.

class Alimento extends Producto {
  private bool $tieneCaducidad;
  public DateTime $fechaCaducidad;

 
}