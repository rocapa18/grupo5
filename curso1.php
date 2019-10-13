<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleDetalleProd.css">
    <link rel="stylesheet" href="css/aldo.css">
    <link rel="stylesheet" href="css/aller.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP y MySQL</title>
  </head>
  <body>
    <div class="container-fluid">
      <?php require("header.php"); ?>
      <div class="contenedor">
        <div class="cursos">
          <section id="video">
            <article class="curso">
              <div id="titulo">
                <h1  class="titulo">PHP y MySQL</h1>
                <h2>Acerca de este curso</h2>
                <p>Aprende a programar de forma sencilla y amena en el lenguaje de servidor más extendido y poderoso del mundo: PHP y MySQL</p>
                <ul>
                  <li>Nivel de habilidad: Todos los niveles</li>
                  <li>Idiomas: Español</li>
                  <li>Subtítulos: No</li>
                  <li>Clases: 545</li>
                  <li>Vídeo: 63 horas</li>
                </ul>
                <h3>Características</h3>
                <p>Disponible en iOS y Android - Certificado de finalización</p>

              </div>
              
              <video  controls>
                <source src=videos\video1.mp4 type=video/mp4>
                <source src=videos\video1.mp4 type=video/ogg>
              </video>
            </article>
            <button type="button" name="button">
                <a href="enlace.html">Comenzar ahora</a>
            </button>
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
   
          </section>

        </div>

        <?php require ("footer.html"); ?>

      </div>
      <script src="js/particles.js"></script>
      <script src="js/app.js"></script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/1b52e0f26e.js"></script>
</body>
</html>
