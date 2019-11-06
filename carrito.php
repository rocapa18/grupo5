<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleCarrito.css">
    <link rel="stylesheet" href="css/styleHome.css">
    <link rel="stylesheet" href="css/aldo.css">
    <link rel="stylesheet" href="css/aller.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Carrito</title>
</head>

<body>    
  <div class="container-fluid">                
    <?php 
      $titulo = "carrito";
      require("header.php")       
    ?>
    <div class="animation">
      <div id="particles-js">
      </div>
    </div>
    <main>
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><h2>Carrito de Compras</h2></li>
              <div id="carrito">
                <img src="img/carrito.ico" alt="">
              </div>
            </ol>
        </nav>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Precio</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><i class="far fa-trash-alt"></i><img src="img\1.jpg" alt="curso" class="img-thumbnail"><h2>PHP y MySQL</h2></th>
              <td>U$D 12</td>
              <td>1</td>
              <td>U$D 12</td>
            </tr>
            <tr>
              <th scope="row"><i class="far fa-trash-alt"></i><img src="img\2.jpg" alt="curso" class="img-thumbnail"><h2>BOOTSTRAP4</h2></th>
              <td>U$D 10</td>
              <td>1</td>
              <td>U$D 10</td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td>TOTAL</td>
              <td></td>
              <td>U$D 22</td>
            </tr>
          </tbody>
        </table>
        <div class="phone">
          <div class="producto">
            <img src="img\PHP.jpg" alt="curso" class="img-thumbnail">
            <h2>PHP y MySQL</h2>
          </div>
          <div class="precio">
            <h2>Precio</h2>
            <h2>U$S 12</h2>
          </div>
          <div class="subtotal">
              <h2>Subtotal</h2>
              <h2>U$S 12</h2>
          </div>

        </div>
        <div class="phone">
            <div class="producto">
              <img src="img\bootstrap4.jpg" alt="curso" class="img-thumbnail">
              <h2>BOOTSTRAP 4</h2>
            </div>
            <div class="precio">
              <h2>Precio</h2>
              <h2>U$S 10</h2>
            </div>
            <div class="subtotal">
                <h2>Subtotal</h2>
                <h2>U$S 10</h2>
            </div>
  
          </div>
          <div class="total">
            <h2>TOTAL</h2>
            <h2>U$S 22</h2>
          </div>
    </main>

  </div>
  
</body>   
</html>