<?php 
error_reporting(0);
$valorApellido="";
$valorNombre = "";
$valorEmail="";

if ($_POST){
  if(strlen($_POST["apellido"]) == 0){
    echo "Debe ingresar apellido <br>";
  } else {
    $valorApellido = $_POST["apellido"];
  }

  if(strlen($_POST["nombre"]) == 0){
    echo "Debe ingresar nombre <br>";
  } else {
    $valorNombre = $_POST["nombre"];
  }

  if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    echo "Debe ingresar email valido <br>";
  } else {
    $valorEmail = $_POST["email"];
  }

  if(strlen($_POST["contrasena1"]) == 0){
    echo "Debe ingresar contraseña <br>";
  }
  if(strlen($_POST["contrasena2"]) == 0){
    echo "Debe confirmar contraseña <br>";
  }
  if($_POST["contrasena1"] != $_POST["contrasena1"]){
    echo "Debe coincidir la contraseña y su confirmacion <br>";
  }

  // REGISTRACION DE USUARIOS
  $usuario = [
    "email" => $_POST["email"],
    "password" => password_hash($_POST["pass"], PASSWORD_DEFAULT)
  ];
  
// RECORRER ARREGLO DE USUARIOS PARA VERIFICAR QUE NO EXISTA
  $unArchivo=file_get_contents("usuarios.json");
  $unJson=json_decode($unArchivo, true);
  $encontrado = "N";
  foreach ($unJson as $usuarios){
    foreach ($usuarios as $key => $value) {
      if ($key=="email" && $value==$_POST["email"]){
          echo "Ya existe usuario registrado con ese email <br>";
          $encontrado="S";
          /*
          $usuario["username"]=$usuarios["username"];
          $usuario["email"]=$usuarios["email"];
          return $usuario;
          */
      }
    }
  }
  if ($encontrado == "N"){
    if (isset($_POST['recordar']) && ($_POST['recordar'] == 'on')){
       session_start();
       $_SESSION["usuarioLogueado"] = $_POST["usuario"];
    }                
    setcookie("usuario",$_POST["usuario"],0);
    
     $usuarios = file_get_contents("usuarios.json");
     $usuariosArray = json_decode($usuarios);
     $usuariosArray[] = $usuario;
     $usuariosFinal = json_encode($usuariosArray);
     file_put_contents("usuarios.json", $usuariosFinal);
     header("Location: bienvenida.php");  
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
          $titulo = "registro";
          require("header.php") 
        ?>            
            
        <div class="contenedor">
          <div class="animation">
            <div id="particles-js">
            </div>
          </div>

            <!--<div class="mainregistro">-->
            <h1 class="titulo">Registro</h1>
            <hr class="lineahorizontal">
            <form action="registro.php" method="POST" autocomplete="off">
              <div class="form-group row">
                <label for="apellido" class="col-sm-4 col-form-label">Apellido:</label>
                <div class="col-sm-8">
                  <input type="apellido" class="form-control" id="apellido" name="apellido" value= <?php echo $valorApellido; ?>>
                </div>
              </div>     
              <div class="form-group row">
                <label for="nombre" class="col-sm-4 col-form-label">Nombre:</label>
                <div class="col-sm-8">
                  <input type="nombre" class="form-control" id="nombre" name="nombre" value= <?php echo $valorNombre; ?>>
                </div>
              </div>    
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email:</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email" value= <?php $valorEmail; ?>>
                </div>
              </div>   
              <div class="form-group row">
                <label for="foto" class="col-sm-4 col-form-label">Foto:</label>
                <div class="col-sm-8">
                    <input type="file" name="foto">
                </div>
              </div>                            
              <div class="form-group row">
                <label for="contrasena1" class="col-sm-4 col-form-label">Contraseña:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="contrasena1" name="contrasena1">
                </div>
              </div>
              <div class="form-group row">
                <label for="contrasena2" class="col-sm-4 col-form-label">Repetir Contraseña:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="contrasena" name="contrasena2">
                </div>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="recordar">
                <label class="form-check-label" for="recordar">Recordar Usuario</label>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Registrar</button>
            </form>
        </div>
        <?php require ("footer.php"); ?>
    </div>  <!--conteiner fluid -->
</body>
</html>