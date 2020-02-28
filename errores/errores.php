<?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error == 'faltan_datos') {
        echo "<strong style=color:red>* Todos los campos son requeridos</strong>";
      }
      if ($error == 'nombre') {
        echo "<strong style=color:red>* El nombre es incorrecto</strong>"; 
      }elseif ($error == 'nomLongitud') {
          echo "<strong style=color:red>* El nombre debe contener entre 3 y 18 caracteres </strong>";
      }elseif ($error == 'nombreNum') {
          echo "<strong style=color:red>* El nombre no puede contener numeros</strong>";
      }elseif ($error == 'apellidos') {
        echo "<strong style=color:red>* Los apellidos son incorrectos</strong>";
      }elseif ($error == 'apellidosLongitud') {
        echo "<strong style=color:red>* Los apellidos deben contener entre 3 y 50 caracteres </strong>";
      }elseif ($error == 'apellidosNum') {
          echo "<strong style=color:red>* Los apellidos no pueden contener numeros</strong>";
      }elseif ($error == 'edad') {
        echo "<strong style=color:red>* Debes tener al menos 18 años y ser menor de 99 años</strong>";
      }elseif ($error == 'numNaturales') {
        echo "<strong style=color:red>* La edad debe ser un numero natural</strong>";
      }elseif ($error == 'email') {
        echo "<strong style=color:red>* Introduce un email correcto</strong>";
      }elseif ($error == 'password') {
        echo "<strong style=color:red>* La contraseña debe de ser al menos de 6 caracteres, alfanumerica y contener mayúsculas y minúsculas</strong>";
      }
    }
    
  ?>