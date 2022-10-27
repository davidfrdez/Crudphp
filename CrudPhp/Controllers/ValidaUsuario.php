<?php
require "../Clases/Transaccion.php";
class Validar{


function __construct(){

}

public function ValidarUsuario(){
  $nombre=$_GET["nombre"];
  $pass=$_GET["pass"];

  $trans = new transaccion();
  $E=$trans->InsertarRegistro($nombre,$pass);
  if($E==0){
    echo "<script>location.href='../View/index.php'</script>";
  }else {
    echo "<script>location.href='../View/Dashboard.php'</script>";
  }

}

}
$ds=new Validar();
$ds->ValidarUsuario();
 ?>
