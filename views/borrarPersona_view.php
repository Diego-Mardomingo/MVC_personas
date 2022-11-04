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
  <form action="index.php?controller=personas_controller&metodo=borrar" method="POST">
    <p>Selecciona el DNI de la persona que quieres eliminar:
      <select name="DNI">
        <?php
          foreach($datosAVista as $key => $persona){
            /* Para que cuando se seleccione una opción y se envíen los datos, luego aparezca
            seleccionada la opción que hemos elegido */
            /* Primero compruebo si se ha elegido un DNI o no */
            if(isset($_POST['ver'])){
              /* Cuando ya se ha elegido una opción compruebo cual ha sido la elegida y la dejo marcada(selected)*/
              if($persona->getDNI()==$datosAVista2['DNI']){
                echo "<option selected>".$persona->getDNI()."</option>";
              }else{
                /* Si no es la opción elegida la muestra normal */
                echo "<option>".$persona->getDNI()."</option>";
              }
            }else{
              /* Si no se ha elegido un DNI aún entonces mostrará las opciones de manera normal */
              echo "<option>".$persona->getDNI()."</option>";
            }
          }
        ?>
      </select>
    </p>
    <input type="submit" name="ver" value="Ver información">
  </form>

  <?php
  if(isset($_POST['ver'])){
  ?>
  <form action="index.php?controller=personas_controller&metodo=confirmar_borrado" method="POST">
    <p>Datos de la persona que se va a <b style="color:red;">borrar</b> :</p>
    <div class="datos">
      <div class="parrafos">
        <p>Nombre:</p>
        <p>Apellidos:</p>
        <p>Edad:</p>
        <p>DNI:</p>
      </div>
      <div class="input_datos">
        <input type="text" name="nombre" readonly value="<?php echo $datosAVista2['nombre'] ?>">
        <input type="text" name="apellidos" readonly value="<?php echo $datosAVista2['apellidos'] ?>">
        <input type="text" name="edad" readonly value="<?php echo $datosAVista2['edad'] ?>">
        <input type="text" name="DNI" readonly value="<?php echo $datosAVista2['DNI'] ?>">
      </div>
    </div>
    
    <input type="submit" name="confirmar_borrado" value="Confirmar borrado">
  </form>
  <?php
  }
  ?>
</body>
</html>