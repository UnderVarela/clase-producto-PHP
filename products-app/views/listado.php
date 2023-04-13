<?php
require_once(USE_CASES.'listar-productos.php');

?>
<main class="content">
  <h1>Listado total de productos</h1>
  
  <?php
  $compra = listarProductos($_SESSION['productos']??null);
  if ($compra === null):
  ?>
  
  <mark>No hay nada en el carrito</mark>

  <?php
  else:
  extract($compra);
  ?>

  <table role="grid">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
  </thead>
  <tbody>
    <?php
    foreach ($productos as $key => $producto):
    ?>
    <tr>
      <th scope="row"><?=$producto->getId()?> (<?=get_class($producto)?>)</th>
      <td><?=$producto->getNombreProducto()?></td>
      <td><?=$producto->getPrecio()?> €</td>
    </tr>
    <?php
    endforeach
    ?>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="2" scope="col"><strong>Su compra</strong></th>
      <td scope="col"><strong>Total <?=$compra['total']?> €</strong></td>
     
    </tr>
  </tfoot>
</table>

  <?php
  endif;
  ?>

</main>