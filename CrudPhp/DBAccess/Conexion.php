<?php
class dbx_connect
{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "tienda";
  public function __construct()
  {
  }

  public function DB_connect(){
    $conectarDB=mysqli_connect($this->host,$this->user,$this->password,$this->db);
    if($conectarDB){
      //echo true;
      return $conectarDB;
    }else {
      //echo false;
      return mysqli_error($conectarDB);
    }
  }
}

 ?>
