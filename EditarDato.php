<?php
require "../Clases/Transaccion.php";
class EditarDatos
{

  function __construct()
  {
  }

  public function EditarDatos(){
    $id=$_GET["id"];
    $producto=$_GET["producto"];
    $cantidad=$_GET["cantidad"];
    // $imagen=$_GET["imagen"];

    $Trans = new transaccion();
    $E=$Trans->EditarDatos($id,$producto,$cantidad);
    if($E==0){
      echo "<script>location.href='../View/DetalleProducto.php'</script>";
    }else {
      echo "<script>location.href='../View/DetalleProducto.php'</script>";
    }
  }
}
$ds=new EditarDatos();
$ds->EditarDatos();
 ?>
