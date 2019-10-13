<?php 
  if ($_POST){
      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        echo "Debe ingresar email valido <br>";
      } else {
        if (strcmp(trim($_POST["comentario"]) , "" ) == 0){
            echo "Debe completar texto de comentario";
        } else {
            // AQUI VA EL CODIGO QUE ENVIA EMAIL A CASILLA ENCARGADA DE RECEPCION DE COMENTARIOS 
            // EN NUESTRA EMPRESA
            echo "Comentario enviado exitosamente, a la brevedad contactaremos con ud.";
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
    <link rel="stylesheet" href="css/stylePerfil.css">
    <link rel="stylesheet" href="css/styleContacto.css">
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
          $titulo = "contacto";
          require("header.php") 
        ?>            
        <div class="contenedor">
          <div class="animation">
            <div id="particles-js">
            </div>
          </div>
                
            <div class="mainperfil">
              <h1 class="titulo">Contacto</h1>
              <hr class="lineahorizontal">
              <form action="contacto.php" method="POST">
                <div>
                  <label for="email">Email</label>
                  <div >
                  <input type="email" id="email" name="email">
                  </div>
                </div>

                <div>
                  <label for="comentario">Comentarios</label>
                  <div id="textarea">
                    <textarea name="comentario" id="comentario" cols="43" rows="8">                    
                    </textarea>
                  </div>
                </div> 

                <div>
                  <label for="comentario"></label>
                  <div>
                    <button type="submit" class="btn btn-warning mb-2 boton-submit">Enviar Comentario</button>
                  </div>
                </div>   
              </form>
            </div>
             <?php require ("footer.php"); ?>
    </div>  <!--conteiner fluid -->
</body>
</html>