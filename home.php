<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleHome.css">
    <link rel="stylesheet" href="css/aldo.css">
    <link rel="stylesheet" href="css/aller.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Grupo 5</title>
</head>
<body>
    <div class="container-fluid">
        
        <?php 
        $titulo = "home";
        require("header.php"); ?>
        <div class="contenedor">
          <div class="animation">
            <div id="particles-js">
            </div>
          </div>
        <div class="mainlogo">
            <h1>Recursos Para Desarrollo WEB</h1>
            <h3>Los Mejores Cursos a tu Alcance</h3>
            <figure><img src="img/logo5t.png" alt="logo"></figure>
            <button id="cursos">
                    <a href="productos.php" target="blank">Cursos Disponibles</a>
                
            </button>
            
            <!-- <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div> -->
        </div>
        <?php require ("footer.php"); ?>
    </div>  <!--conteiner fluid -->
</body>
</html>
