<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php?controller=personas_controller&metodo=borrar" method="POST">
    <p>Selecciona el DNI de la persona que quieres eliminar:</p>
    <select name="DNIPersonas">
      <?php
        foreach($datosAVista as $key => $persona){
          echo "<option>".$persona->getDNI()."</option>";
        }
      ?>
    </select>
    <input type="submit" value="Ver información">
  </form>
</body>
</html>