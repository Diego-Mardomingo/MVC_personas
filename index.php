<?php
  include_once("controllers/personas_controller.php");

  $controller = new personas_controller();

  if(isset($_GET["metodo"])){
    echo "Hola";
  }else{
    $controller->cargar_inicio();
    require_once("views/".$controller->view);
  }

?>