<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action="index.php?controller=personas_controller&metodo=añadir" method="post">
    <p>Nombre: <input type="text" name="nombre"></p>
    <p>Apellidos: <input type="text" name="apellidos"></p>
    <p>Edad: <input type="text" name="edad"></p>
    <p>DNI: <input type="text" name="DNI"></p>
    <input type="submit" name="crear" value="Crear">
  </form>
</body>
</html>