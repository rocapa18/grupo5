<?php 
$valorUsuario="";
if ($_POST){
  if(strlen($_POST["usuario"]) == 0){
    echo "Debe ingresar usuario <br>";
  } elseif (strlen($_POST["pass"]) == 0) {
    $valorUsuario=$_POST["usuario"];
    echo "Debe ingresar contrasena <br>";
  } else {   
      if (file_exists("usuarios.json")) {        
      // RECORRER ARREGLO DE USUARIOS PARA VERIFICAR QUE EXISTA
        $unArchivo=file_get_contents("usuarios.json");
        $unJson=json_decode($unArchivo, true);
        $encontrado = "N";
        foreach ($unJson as $usuarios){
          foreach ($usuarios as $key => $value) {
            if ($key=="email" && $value==$_POST["usuario"]){
                $encontrado="S";
                // graba sesion de usuario logueado
                if (isset($_POST['recordar'])){
                  session_start();
                  $_SESSION["usuarioLogueado"] = $_POST["usuario"];
                }                
                setcookie("usuario",$_POST["usuario"],0);
                header("Location: bienvenida.php");  
            }
          }
        }
        if ($encontrado == "N"){
           echo "Usuario no registrado <br>";
        }
      }else{
        echo "Usuario no registrado <br>";
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
        <div class="animation">
          <div id="particles-js">
          </div>
        </div>

        <div class="contenedor">
            <div class="mainperfil">
                <h1 class="titulo">Login</h1>
                <hr class="lineahorizontal">
            </div>
            <form action="login.php" method="POST" autocomplete="off">
              <div class="form-group row">
                <label for="usuario" class="col-sm-4 col-form-label">Usuario:</label>
                <div class="col-sm-8">
                  <input type="usuario" class="form-control" placeholder="Ingrese su email" id="usuario" name="usuario" value= <?php echo $valorUsuario; ?>>
                </div>
              </div>
              <div class="form-group row">
                <label for="pass" class="col-sm-4 col-form-label">Contraseña:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" placeholder="Ingrese contraseña" id="pass" name="pass">
                </div>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="recordar" name="recordar">
                <label class="form-check-label" for="recordar">Recordar Usuario</label>
              </div>
              <div class="form-group">
                [<a href="registro.php">REGISTRAR NUEVO USUARIO</a>]
                [<a href="recuperar.php">OLVIDÉ CONTRASEÑA</a>] 
              </div>
              <button type="submit" class="btn btn-primary mb-2">Ingresar</button>
            </form>
            <?php require ("footer.php"); ?>
    </div>  <!--conteiner fluid -->
</body>
</html>
