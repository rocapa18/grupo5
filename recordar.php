<?php 
if ($_POST){
  if(filter_var($_POST["usuario"], FILTER_VALIDATE_EMAIL) == false){
    echo "Debe ingresar email valido <br>";
  } else {
    echo "Hemos enviado su contraseña al email indicado";
    $unArchivo=file_get_contents("usuarios.json");
    $unJson=json_decode($unArchivo, true);
    $encontrado="N";
    foreach ($unJson as $usuarios){
      foreach ($usuarios as $key => $value) {
        if ($key=="usr" && $value==$_POST["usuario"]) {              
          // AQUI VA EL CODIGO PARA ENVIAR CONTRASEÑA DEL EMAIL DE USUARIO
        }
      }
    }
    if ($encontrado == "N"){
      echo "Usuario no registrado <br>";
    }else {
      header("Location: login.php");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleRegistro.css">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="css/aldo.css">
    <link rel="stylesheet" href="css/aller.css">
    <link rel="stylesheet" href="css/icomoon.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Grupo 5</title>
</head>
<body>
    <div class="container-fluid">
        <?php
          $titulo = "login";
          require("header.php") 
        ?>            

        <div class="contenedor">
          <div class="animation">
            <div id="particles-js">
            </div>
          </div>

            <div class="mainperfil">
                <h1 class="titulo">Recuperar Contraseña</h1>
                <hr class="lineahorizontal">
            </div>
            <form action="recuperar.php" method="POST" autocomplete="off">
              <div class="form-group row">
                <label for="usuario" class="col-sm-4 col-form-label">Usuario:</label>
                <div class="col-sm-8">
                  <input type="usuario" class="form-control" placeholder="Ingrese su email" id="usuario" name="usuario">
                </div>
              </div>

              <button type="submit" class="btn btn-primary mb-2">Recuperar</button>
            </form>
            <?php require ("footer.php"); ?>
    </div>  <!--conteiner fluid -->
</body>
</html>
