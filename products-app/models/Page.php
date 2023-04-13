<?php
class Page {
 static function pageRequest (string $request, string $route) {
  return "$route$request.php";
 }
}