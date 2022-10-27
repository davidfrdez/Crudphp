<?php
require "../Clases/Transaccion.php";
class InsertarProducto
{
 //$name="";


  public function Insertar(){

    $producto=$_GET["pro"];
    $cantidad=$_GET["can"];
    $name=$_FILES["files"]["name"];
    move_uploaded_file($_FILES["files"]["tmp_name"],"../img/".$name);
    $url="../img/".$name;
    $dao=new transaccion();
    $res=$dao->InsertarProducto($producto,$cantidad,$url);
    echo $res;

  }

}
$ds=new InsertarProducto();
$ds->Insertar();


 ?>
