<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="styles/views_style.css">
</head>
<body>
  <nav><a href="index.php">Inicio</a></nav>
  <form action="index.php?controller=personas_controller&metodo=añadir" method="post">
    <p>Datos de la persona que quieres añadir: </p>
    <div class="datos">
      <div class="parrafos">
        <p>Nombre:</p>
        <p>Apellidos:</p>
        <p>Edad:</p>
        <p>DNI:</p>
      </div>
      <div class="input_datos">
        <input type="text" name="nombre">
        <input type="text" name="apellidos">
        <input type="text" name="edad">
        <input type="text" name="DNI">
      </div>
    </div>
    <input type="submit" name="crear" value="Crear">
  </form>
</body>
</html>