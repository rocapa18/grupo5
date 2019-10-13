<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleHome.css">
    <link rel="stylesheet" href="css/stylePerfil.css">
    <link rel="stylesheet" href="css/aldo.css">
    <link rel="stylesheet" href="css/aller.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Grupo 5</title>
</head>
<body>
    <div class="container-fluid">
        <?php
          $titulo = "perfil";
          require("header.php") 
        ?>            
            
        <div class="contenedor">
          <div class="animation">
            <div id="particles-js">
            </div>
          </div>

            <div class="mainperfil">
                <h1 class="titulo">Perfil</h1>
                <hr class="lineahorizontal">
            <div class="cuerpoperfil">
                <img class="imagenperfil" src="img/usuario.png" alt="Perfil de Usuario">
            </div>
            <div class="textoperfil">
                <h3>Bienvenido a GRUPO 5</h3>
                <span><?php echo "Usuario: " . $usuarioLogueado; ?></span><br>
                <span><?php echo "Estado:  ACTIVO - " . date("d/m/Y"); ?></span><br>
                <form action="editar_perfil.php" method="POST">
                    <br>
                    <button type="submit" class="btn btn-warning mb-2 boton-submit">Editar Perfil
                    </button>                    
                </form>
            </div>
        </div>

      <?php require ("footer.php"); ?>
    </div>  <!--conteiner fluid -->
</body>
</html>
