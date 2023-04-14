<?php


$producto = null;
$indice = false;
foreach ($_SESSION['productos'] as $key=> $prod) {
  if ($prod->getId() === $_GET['id']) {
    $producto = $prod;
    $indice = $key;
    break;
  }
}

// Actualizar formulario
if(isset($_GET['actualizar']) && isset ($producto)){
  $nombre = htmlspecialchars($_GET['nombre-producto']);
  $precioProducto = filter_var($_GET['precio-producto'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
  $producto?->setNombreProducto($nombre);
  $producto?->setPrecio($precioProducto);
  $_SESSION['productos'][$indice] = $producto;
}

$tipo = (isset($producto)) ? get_class($producto): 'Alimento';

?>

<main class="container">
  <h1>Editar Producto</h1>
  <form action="">
    <fieldset class="campo">
      <label>Alimento <input  disabled <?=$tipo === 'Alimento' ? 'checked': ''?>name="tipo" type="radio" value="alimento"></label>
      <label>Utensilio <input disabled <?=$tipo === 'Utensilio' ? 'checked': ''?>name="tipo" type="radio" value="utensilio"></label>
    </fieldset>
    <div class="campo">
      <label for="nombre">Nombre del Producto</label>
    <input 
      minlength="2" 
      required id="nombre" 
      type="text" 
      name="nombre-producto" 
      placeholder="producto" 
      value="<?=$producto?->getNombreProducto()?>"
    >
    </div>
    <div class="campo">
      <label for="precio">Precio del Producto</label>
      <input 
      required 
      type="number" 
      step="any" 
      name="precio-producto" 
      placeholder="precio €"
      value="<?=$producto?->getNombreProducto()?>"
      >
    </div>
    <input type="hidden" name="page" value="editar">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <button name="actualizar">Actualizar producto</button>
  </form>
</main>
