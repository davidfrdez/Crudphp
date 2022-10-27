<?php
require "../Clases/Transaccion.php";
class EliminarDatos
{

  function __construct()
  {
  }

  public function EliminarDatos(){
    $id=$_GET["id"];

    $Trans = new transaccion();
    echo $Trans-> EliminarDatos($id);
    $E=$Trans->EliminarDatos($id);
    if($E==0){
      echo "<script>location.href='../View/DetalleProducto.php'</script>";
    }else {
      echo "<script>location.href='../View/DetalleProducto.php'</script>";
    }
  }
}
$ds=new EliminarDatos();
$ds->EliminarDatos();
 ?>
