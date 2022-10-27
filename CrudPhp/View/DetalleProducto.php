<?php
require_once("../Controllers/TrearProductos.php");
  $traer =  new TrearProductos();
  $proc = $traer->TraerProductos();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../styles/Styles.css">
  <link rel="stylesheet" href="../styles/Modal.css">
  </head>
  <body>
    <header class="titulo">
      <h1>Detalles<button class="btn btn-primary bta1"type="button"onclick="regresa()" name="button">Dashboard</button></h1>
    </header>
    <table class="table table-striped tab" id="table">
      <h2 class="titulo2">Productos</h2>
      <tr>
        <td>Id</td>
        <td>Producto</td>
        <td>Cantidad</td>
        <td>Fecha Creación</td>
        <td>Imagen</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
      <?php
          for ($i=0; $i < count($proc); $i++) {
        ?>
        <tr>
          <td id="uno<?php echo $i?>"><?php echo $proc[$i]->id ?></td>
          <td id="dos<?php echo $i?>"><?php echo $proc[$i]->producto ?></td>
          <td id="tres<?php echo $i?>"><?php echo $proc[$i]->cantidad ?></td>
          <td id="cuatro<?php echo $i?>"><?php echo $proc[$i]->fecha ?></td>
          <!-- <td id="cinco <?php echo $i?>"><?php echo $proc[$i]->imagen ?></td> -->
          <td id="cinco <?php echo $i?>"><?php echo '<img src="'.$proc[$i]->imagen.'" width="80px" height="80px">' ?></td>
          <td><a class="btn btn-primary"role="button" >Editar</a></td>
          <td><a class="btn btn-danger"role="button" >Eliminar</a></td>
          <!-- <td><a class="btn btn-danger"role="button" href="../Controllers/EliminarDatos.php?id=<?php echo $proc[$i]->id ?>">Eliminar</a></td> -->
        </tr>
        <?php
        }
         ?>
    </table>
    <div class="modal">
      <form class="formulario" action="../Controllers/EditarDato.php" method="get">
        <div class="form-floating mb-3">
          <input type="text" name="id" class="form-control" id="id"  style="visibility:hidden">

        </div>
      <div class="form-floating mb-3">
        <input type="text" name="producto" class="form-control" id="producto" placeholder="Producto">
        <label for="floatingInput">Producto</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" name="cantidad" class="form-control" id="cantidad" placeholder="Password">
        <label for="floatingPassword">Cantidad</label>
      </div>
      <div class="form-floating mb-3">
        <input style="display:none" id="imagen">

      </div>
      <div class="ordenar">
        <button class="btn btn-primary bta"type="submit" name="button">Guardar</button>
      </div>
      </form>
    </div>
    <div class="modal2">
      <form class="formulario" action="../Controllers/EliminarDatos.php" method="get">
        <h2>Desea eliminar el producto</h2>
        <div class="form-floating mb-3">
          <input type="text" name="id" class="form-control" id="id2"  style="visibility:hidden">
        </div>
        <div class="ordenar">
          <button class="btn btn-danger bta" type="submit" name="button">Eliminar</button>
        </div>
      </form>
      <div class="ordenar ">
          <button class="btn btn-primary bta5"  onclick="cancelar()">Cancelar</button>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
function regresa(){
  location.href="Dashboard.php";
}



  $(".btn-primary").click(function () {

           var valores=[];
           var i = 0;
           $(this).parents("tr").find("td").each(function () {

               valores[i] = $(this).html();
               i++;
                document.getElementById("id").value = valores[0];
                document.getElementById("producto").value = valores[1];
                document.getElementById("cantidad").value = valores[2];
                document.getElementById("imagen").value = valores[4];
                 $(".modal").show();
           });
         })
         $(".btn-danger").click(function () {

                  var valores=[];
                  var i = 0;
                  $(this).parents("tr").find("td").each(function () {

                      valores[i] = $(this).html();
                      i++;
                       document.getElementById("id2").value = valores[0];

                        $(".modal2").show();
                  });
                })

                function cancelar() {
                    $(".modal2").hide();
                }
</script>
