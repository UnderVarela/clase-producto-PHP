<?php

/** 
* función para gestionar la compra de los pedidos del formulario:
* @param {Alimento | Utensilio []} - Array de objetos de la compra de la tienda.
* @param {array | null} - retorna arraay objetos compra o null si no hay compra.
*/ 

function listarProductos ($compra): array|null {
  if(!isset($compra)) return null;
    $carrito = new Compra(...$compra);
    return  [
      'productos' => $carrito->getProductos(), 
      'total'=>$carrito->dimeTotalCompra()
    ];
  }
  
