<?php
require "../Clases/Transaccion.php";

class TrearProductos
{
  public $productos;
  public function __construct()
  {
  }
  public function TraerProductos(){
    $con = new transaccion();
    $productos = $con->TraerDatos();
    return $productos;
  }
}
?>
