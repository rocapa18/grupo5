<?php 
    if(isset($_COOKIE['usuario'])){
        $usuarioLogueado = $_COOKIE['usuario'];
        echo "<div class='usuarioLogueado'> 
        Usuario: " . $usuarioLogueado;
    }else{
        $usuarioLogueado = "";
    }  

/*
    if (!isset($_SESSION["usuarioLogueado"])){
      session_start();
    }
    if (isset($_SESSION["usuarioLogueado"])){
        $usuarioLogueado = $_SESSION["usuarioLogueado"];
        echo "<div class='usuarioLogueado'> 
        Usuario: " . $usuarioLogueado;
    }else{
        $usuarioLogueado = "";
    }  
*/

 ?>

<header>
    <ul class="nav nav-pills">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
            <div class="dropdown-menu">
                <?php 

                if  (strcmp ($titulo , "home" ) != 0){
                    echo "<a class='dropdown-item' href='home.php'>HOME</a>";
                }
                if  (strcmp ($titulo , "registro" ) != 0){
                    if ($usuarioLogueado != ""){                        
                    } else {
                      echo "<a class='dropdown-item' href='registro.php'>REGISTRO</a>";
                    }
                }
                if  (strcmp ($titulo , "login" ) != 0){
                    if ($usuarioLogueado != ""){
                    } else {
                       echo 
                       "<a class='dropdown-item' href='login.php'>LOGIN</a>";
                    }
                }
                if  (strcmp ($titulo , "contacto" ) != 0){
                    echo "<a class='dropdown-item' href='contacto.php'>CONTACTO</a>";
                }
                if  (strcmp ($titulo , "perfil" ) != 0 && $usuarioLogueado != ""){
                    echo "<a class='dropdown-item' href='perfil.php'>PERFIL</a>";
                }
                if  (strcmp ($titulo , "faq" ) != 0 && strcmp ($titulo , "productos" ) != 0 && strcmp ($titulo , "recuperar" ) != 0){
                    echo "<a class='dropdown-item' href='faq.php'>FAQ</a>";
                }
                if  (strcmp ($titulo , "carrito" ) != 0){
                    echo "<a class='dropdown-item' href='carrito.php'>CARRITO</a>";
                }

                if ($usuarioLogueado != ""){
                    echo "<a class='dropdown-item' href='salir.php'>Salir</a>";
                    echo "Usr: " . $usuarioLogueado;
                } 
                ?>
            </div>

        </li>
    </ul>   

    <div class="nav">
        <nav id="principal">
            <img src="img/logo5t.png" alt="logo" id="logoChico">
            <h2>DH - Grupo 5</h2>

            <ul>
                <?php 
                if  (strcmp ($titulo , "home" ) != 0){
                    echo "<li><a href='home.php'>HOME</a></li>";
                }
                if  (strcmp ($titulo , "registro" ) != 0){
                    if ($usuarioLogueado != ""){    
                    }else{
                       echo "<li><a href='registro.php'>REGISTRO</a></li>";
                    }                    
                }
                if  (strcmp ($titulo , "login" ) != 0){
                    if ($usuarioLogueado != ""){
                    } else {
                      echo "<li><a href='login.php'>LOGIN</a></li>";
                    }
                }
                if  (strcmp ($titulo , "perfil" ) != 0 && $usuarioLogueado != ""){
                    echo "<li><a href='perfil.php'>PERFIL</a></li>";
                }
                if  (strcmp ($titulo , "contacto" ) != 0){
                    echo "<li><a href='contacto.php'>CONTACTO</a></li>";
                }
                if  (strcmp ($titulo , "faq" ) != 0 && strcmp ($titulo , "productos" ) != 0 && strcmp ($titulo , "recuperar" ) != 0){
                    echo "<li id='faq'><a href='faq.php'>FAQ  </a></li>";
                }
                if  (strcmp ($titulo , "carrito" ) != 0){
                    echo "<li id='carrito'><a href='carrito.php'>CARRITO</a></li>";
                }

                if ($usuarioLogueado != ""){
                    echo "<li id='salir'> <a class='dropdown-item' href='salir.php'>Salir</a> </li>";
                } 

/*
                    echo "<a class='dropdown-item' href='carrito.php'>
                    <img src='img/carrito.png' alt=''>
                    </a>";
*/
                         
                ?>
            </ul>
        </nav>
    </div>
</header>