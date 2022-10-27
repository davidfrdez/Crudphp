<?php

require_once("../DBAccess/Conexion.php");

class transaccion
{

  public function __construct()
  {

  }
  public function Conexion(){
    $conectarDB = new dbx_connect();
    $BBDD = $conectarDB->DB_connect();
    return $BBDD;

  }

public function InsertarProducto($producto,$cantidad,$imagen){
  $BBDD = $this->Conexion();
  $query="insert into productos(Producto,Cantidad,Imagen)values('$producto',$cantidad,'$imagen')";
  $resultado = mysqli_query($BBDD,$query);
  if($resultado){
    return true;
  }else {
    echo mysqli_error($BBDD);
    return false;
  }


}
public function InsertarRegistro($nombre,$pass){
  $BBDD = $this->Conexion();
  $query="CALL Validar ('$nombre','$pass');";
  $resultado = mysqli_query($BBDD,$query);
  if(mysqli_num_rows($resultado)>0){
    return 1;
  }else {
    echo mysqli_error($BBDD);
    return 0;
  }
}
public function TraerDatos(){
  $res = array();
  $BBDD = $this->Conexion();
  $query="select * from productos";
  $resultado = mysqli_query($BBDD,$query);
  if(mysqli_num_rows($resultado)>0){
    while ($file=mysqli_fetch_array($resultado)) {
      $dto = new stdClass();
      $dto->id = $file["id"];
      $dto->producto = $file["Producto"];
      $dto->cantidad = $file["Cantidad"];
      $dto->fecha = $file["Fecha"];
      $dto->imagen = $file["Imagen"];
      $res[]=$dto;
    }
    return $res;
  }else {
    echo mysqli_error($BBDD);
    return 0;
  }
}
public function EliminarDatos($id){
  $BBDD = $this->Conexion();
  $query="delete from productos where id = '$id'";
  $resultado = mysqli_query($BBDD,$query);
  if($resultado){
    return 1;
  }else{
    echo mysqli_error($BBDD);
    return 0;
  }
}
public function EditarDatos($id,$producto,$cantidad){
  $BBDD = $this->Conexion();
  $query="update productos set Producto='$producto',Cantidad=$cantidad where id = $id";
  $resultado = mysqli_query($BBDD,$query);
  if($resultado){
    return 1;
  }else{
    echo mysqli_error($BBDD);
    return 0;
  }
}

}

 ?>
