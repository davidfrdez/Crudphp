<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/Styles.css">
    <title>CRUD</title>
  </head>
  <body>
    <body>
      <div class="Login">
          <div class="section">
            <div class="login bg-white m-4">
              <h1 class="text-center">
              <form action="../Controllers/ValidaUsuario.php" method="GET">
                <div class="form-group">
                  <label class="form-label" type="usuario">
                    Usuario
                  </label>
                  <input class="form-control"type="text" name="nombre" />
                </div>

                <div class="form-group">
                  <label class="form-label" type="password">
                    Password
                  </label>
                  <input class="form-control"type="text" name="pass"/>
                </div>
                <input class="btn btn-primary w-100"type="submit"value="Login"
                />
              </form>
            </div>
          </div>
        </div>
    </body>
    </html>
<?php








 ?>
