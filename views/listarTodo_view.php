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
  <table border="1em" cellspacing="0em" cellpadding="10em" style="border-collapse: collapse">
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Edad</th>
      <th>DNI</th>
    </tr>
    <?php
    if(count($datosAVista)>0){
      foreach($datosAVista as $index => $persona){
        echo "<tr>";
          echo "<td>".$persona->getNombre()."</td>";
          echo "<td>".$persona->getApellidos()."</td>";
          echo "<td>".$persona->getEdad()."</td>";
          echo "<td>".$persona->getDNI()."</td>";
        echo "</tr>";
      }
    }
    ?>
  </table>
</body>
</html>