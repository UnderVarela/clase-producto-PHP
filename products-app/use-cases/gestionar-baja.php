<?php
require_once('../config.php');
require_once(MODELS.'Alimento.php');
require_once(MODELS.'Utensilio.php');

session_start();

if(!isset($_SESSION['productos']))
  die('Error, no encuentro la sesión de productos');

  if(isset($_GET['id']) 
  && !empty($_GET['id']) 
  && isset ($_GET['option']) 
  && $_GET['option'] === 'delete') {
    // Eliminar 
  $indice = false;
    foreach ($_SESSION['productos'] as $key=> $producto) {
      if ($producto->getId() === $_GET['id']) {
          $indice = $key;
          break;
      }
    }

    if ($indice !== false) {
      unset($_SESSION['productos'][$indice]);
      
    }

  } else {
    die('Producto inexistente en la base de datos');
  }


  // Redirijo a algún sitio:
  if (!isset($_SESSION['productos']) || count($_SESSION['productos']) < 1)
  header('location: ../index.php?page=home');
  else
 header('Location: ../index.php?page=listado');