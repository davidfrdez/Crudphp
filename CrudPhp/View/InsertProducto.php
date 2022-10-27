<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/Styles.css">
    <title></title>
  </head>
  <body>
    <div class="formulario" >
    <header class="TD">
      <div class="logo"><h1 class="tituloInser">Insertar Producto</h1></div>
    </header>
    <div class="form-floating mb-3">
      <input type="text"  class="form-control" name="producto" placeholder="Producto" id="producto">
      <label for="floatingInput">Producto</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text"  class="form-control" name=""="cantidad" id="cantidad" placeholder="Password">
      <label for="floatingPassword">Cantidad</label>
    </div>
    <div class="form-floating mb-3">
      <input id="imagen" type="file" name="files" class="form-control">
      <label  for="floatingPassword">Imagen</label>
    </div>
    <div class="ordenar">
      <button class="btn btn-primary bta"type="submit" name="subir" onclick="imagen()">Guardar</button>
      <button class="btn btn-primary bta"type="button"onclick="regresa()" name="button">Dashboard</button>
    </div>
  </div>
  </body>
</html>
<script type="text/javascript">
function regresa(){
  location.href="Dashboard.php";
}


function imagen(){
    var formData = new FormData();
    var pro=document.getElementById("producto").value;
    var can=document.getElementById("cantidad").value;
    var input=document.getElementById("imagen");
    for (var i = 0; i < input.files.length; i++) {
      var file=input.files[i];
      console.log(input.files[i]);
      formData.append("files",file);
    }


    $.ajax({
        type:'POST',
        url:"../Controllers/InsertProducto.php?pro="+pro+"&can="+can,
        data:formData,
        contentType:false,
        processData:false,
        success:function(data){
        console.log(data);
        location.reload();
        },
        error:function(data){
        console.log(data);
        }
     });
}

</script>
