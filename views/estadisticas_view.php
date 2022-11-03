<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/views_style.css">
</head>
<body>
  <nav><a href="index.php">Inicio</a></nav>
  <table border="1em" style="border-collapse:collapse;" cellpadding="10em">
    <tr>
      <th>Personas registradas</th>
      <th>Edad media</th>
      <th>Mayor edad</th>
      <th>Menor edad</th>
    </tr>
    <tr>
      <?php
        echo "<td>".$datosAVista['numPersonas']."</td>";
        echo "<td>".$datosAVista['edadMedia']."</td>";
        echo "<td>".$datosAVista['edadMAX']."</td>";
        echo "<td>".$datosAVista['edadMIN']."</td>";
      ?>
    </tr>
  </table>
</body>
</html>