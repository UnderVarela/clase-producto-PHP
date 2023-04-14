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
      <th scope="col">Tipo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
  </thead>
  <tbody>
    <?php
    foreach ($productos as $key => $producto):
    ?>
    <tr>
      <td scope="row"><?=$producto->getId()?>
      <a href="./use-cases/gestionar-baja.php?option=delete&id=<?=$producto->getId()?>">
        <img width="16"src="./assets/trash.svg" alt="Quitar">
      </a>
      <a href="../products-app/index.php?page=editar&id=<?=$producto->getId()?>">
        <img width="16"src="./assets/pencil-square.svg" alt="Editar">
      </a>
    </td>
      
      <td><?=get_class($producto)?></td>
      <td><?=$producto->getNombreProducto()?></td>
      <td><?=$producto->getPrecio()?> €</td>
    </tr>
    <?php
    endforeach
    ?>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3" scope="col"><strong>Su compra</strong></th>
      <td scope="col"><strong>Total <?=$compra['total']?> €</strong></td>
     
    </tr>
  </tfoot>
</table>

  <?php
  endif;
  ?>

</main>