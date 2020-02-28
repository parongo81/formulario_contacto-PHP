<?php
  $error = '';

    if (!empty($_POST['nombre'] ) && !empty($_POST['apellidos']) && isset($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
      
      $_POST['nombre'] . '<br>';
      $_POST['apellidos'] . '<br>';
      $_POST['edad'] . '<br>';
      $_POST['email'] . '<br>';
      $_POST['pass'] . '<br>';
      
      var_dump($_POST['nombre']);
      echo '<br>';
      var_dump($_POST['apellidos']);
      echo '<br>';
      var_dump($_POST['edad'] );
      echo '<br>';
      var_dump($_POST['email']);
      echo '<br>';
      var_dump($_POST['pass']);

      //$expresionNombre ='' ;
 
      if (!is_string($_POST['nombre'])) {
        $error = 'nombre';
        header ("Location: formulario.php?error=$error");
      }elseif (strlen($_POST['nombre']) < 3 || strlen($_POST['nombre']) > 18 ) {
        $error = 'nomLongitud';  
        header ("Location: formulario.php?error=$error");
      }elseif ( !preg_match ("/^[a-záéóóúàèìòùäëïöüñ\s]+$/i", $_POST['nombre'])) {
        $error = 'nombreNum';  
        header ("Location: formulario.php?error=$error");
      }elseif (!is_string($_POST['apellidos'])) {
        $error = 'apellidos';
        header ("Location: formulario.php?error=$error");
      }elseif (strlen($_POST['apellidos']) < 3 || strlen($_POST['apellidos']) > 50 ) {
        $error = 'apellidosLongitud';  
        header ("Location: formulario.php?error=$error");
      }elseif ( !preg_match ("/^[a-záéóóúàèìòùäëïöüñ\s]+$/i", $_POST['apellidos'])) {
        $error = 'apellidosNum';  
        header ("Location: formulario.php?error=$error");
      }elseif ($_POST['edad'] <= 1 || $_POST['edad'] > 99) {
        $error = 'edad';
        header ("Location: formulario.php?error=$error");
      }elseif (!preg_match("/^[0-9]+$/", $_POST['edad'])) {
        $error = 'numNaturales';
        header ("Location: formulario.php?error=$error");
      } elseif (!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $_POST['email'])) {
        $error = 'email';
        header ("Location: formulario.php?error=$error");
      }elseif (!is_string($_POST['pass'])) {
        $error = 'pass';
        header ("Location: formulario.php?error=$error");
      }elseif (!preg_match("/^(?=^.{6,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/", $_POST['pass'])) {
        $error = 'password';
        header ("Location: formulario.php?error=$error");
        /*Valida que una contraseña sea fuerte. La contraseña debe contener un caracter en minuscula, una mayuscula, un numero, y debe tener por lo menos 6 caracteres de largo. */
      }

    }else {
      $error = 'faltan_datos';
      header ("Location: formulario.php?error=$error");
    } 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario con PHP y HTML</title>
  </head>
  <body>
    <h1>Datos validados correctamente</h1>
    <? if ($error == 'ok'):?>
      <p><?=$_POST['nombre']?></p>
      <p><?=$_POST['apellidos']?></p>
      <p><?=$_POST['edad']?></p>
      <p><?=$_POST['email']?></p>
    <? endif; ?>
  </body>
</html>




