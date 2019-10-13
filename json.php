<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prueba json</title>
</head>
<body>
	<?php
	  session_start();
	  session_destroy();
	  exit;


  error_reporting(0);

  $usuario = [
    "email" => "tres_usr",
    "password" => password_hash("tres_pw", PASSWORD_DEFAULT)
  ];

  $usuarios = file_get_contents("json.json");
  $usuariosArray = json_decode($usuarios);

  $usuariosArray[] = $usuario;
  $usuariosFinal = json_encode($usuariosArray);

  file_put_contents("json.json", $usuariosFinal);

// RECORRER ARREGLO DE USUARIOS
  $email = "tres_usrasdf";
  $unArchivo=file_get_contents("json.json");
  $unJson=json_decode($unArchivo, true);
  foreach ($unJson as $usuarios){
    foreach ($usuarios as $key => $value) {
      if ($key=="email" && $value==$email) {
      	  echo "encontrado";
      	  exit();
      	  /*
          $usuario["username"]=$usuarios["username"];
          $usuario["email"]=$usuarios["email"];
          return $usuario;
          */
      }
    }
  }
  echo "no encontrado";




exit();

foreach ($a as $key => $value) {
	echo "hola";
  	echo $key;
  	echo "<br>";
  	echo $value;
  	echo "<br>";
  	foreach ($key as $k => $v) {
  		echo "claudio";
	  	echo $k;
	  	echo "<br>";
	  	echo $v;
	  	echo "<br>";
  	}
  	/*
  	echo $value;
  	echo "<br>";
  	*/
}

exit;

$j = json_encode($a);
file_put_contents("json.json",$j, FILE_APPEND);

	var_dump($j);
	exit;

	/*
		file_put_contents("usuario.txt","cbaieli", FILE_APPEND);
		$a = file_get_contents("usuario.txt");
		echo $a;

		if ($_FILES["usuarios.txt"]["error"] != 0){
		    // no existe archivo usuarios directamente grabo registro
		    echo "no existe archivo";
		}else{
    		$archivo = file_get_contents("usuarios.txt");
    		echo "si existe";
		}

		var_dump($archivo);
		*/
$usuario = [
    "usr" => 'cbaieli',
    "pw" => password_hash('1234', PASSWORD_DEFAULT)
  ];

  $usuarios = file_get_contents("usuarios.json");
  var_dump($usuarios);
  exit;

  $usuariosArray = json_decode($usuarios);

  var_dump($usuariosArray);  

exit();

  //$usuariosArray[] = $usuario;
  var_dump($usuariosArray);

  exit;

  $usuariosFinal = json_encode($usuariosArray);
  file_put_contents("usuarios.json", $usuariosFinal, FILE_APPEND);

  var_dump($usuariosFinal);

		exit;

		$usuarios = [
			"a" => "aa",
			"b" => "bb",
			"c" => "cc"
		];

		foreach ($usuarios as $key => $value) {
			echo $key . " " . $value . "<br>" ;
		}

		$json = json_encode($usuarios);
		var_dump($json);
		echo "<br>";

		$arreglo = json_decode($json, true);
		var_dump($arreglo);
		echo "<br>";

		$usuarios["d"]= "dd";
		var_dump($usuarios);
		echo "<br>";
		foreach ($usuarios as $key => $value) {
			echo $key . " " . $value . "<br>" ;
		}

		unset($usuarios["d"]);
		var_dump($usuarios);
		echo "<br>";
		foreach ($usuarios as $key => $value) {
			echo $key . " " . $value . "<br>" ;
		}


	 ?>
</body>
</html>