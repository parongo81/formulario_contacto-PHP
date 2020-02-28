<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/style.css">
  <title>Formulario con PHP y HTML</title>
</head>
<body>
  <div class="body">
    <h1 class="body__titulo">Formulario de registro</h1>

    <form action="procesar_formulario.php" method="POST" class="body__form">
      <div class="body__form__contenedor">
        <label for="nombre" class="body__form__contenedor__label">Nombre</label>
        <input type="text"  name="nombre" placeholder="Nombre" class="body__form__contenedor__input">
      </div>
      <div class="body__form__contenedor">
        <label for="apellidos" class="body__form__contenedor__label">Apellidos</label>
        <input type="text"  name="apellidos"  placeholder="Apellidos" class="body__form__contenedor__input">
      </div>
      <div class="body__form__contenedor">
          <label for="edad" class="body__form__contenedor__label">Edad</label>
          <input type="text"  name="edad" placeholder="Edad" class="body__form__contenedor__input">
      </div>
      <div class="body__form__contenedor">
        <label for="email" class="body__form__contenedor__label">Email</label>
        <input type="text"  name="email" placeholder="Email" class="body__form__contenedor__input">
      </div>
      <div class="body__form__contenedor">
          <label for="pass" class="body__form__contenedor__label">Contraseña</label>
          <input type="password" name="pass" placeholder="Contraseña" class="body__form__contenedor__input">
        </div>
      <input type="submit" value="Enviar" name="submit" class="body__form__submit"> 
      <div class="body__form__errores">
        <?php require_once 'errores/errores.php' ?>
      </div>
    </form>

  </div>
</body>
</html>