<?php
  include_once("controllers/personas_controller.php");

  $controller = new personas_controller();

  if(isset($_GET["metodo"])){
    switch($_GET["metodo"]){
      case 'añadir':
        if(empty($_POST)){
          $controller->cargarVistaCrear();
          require_once("views/".$controller->view);
        }else{
          $controller->crear();
          require_once("views/".$controller->view);
        }
        break;
      case 'listar':
        $datosAVista = $controller->listarTodo();
        require_once("views/".$controller->view);
        break;
      case 'actualizar':
        break;
      case 'borrar':
        if(empty($_POST)){
          $datosAVista = $controller->listarTodo();
          $controller->cargarVistaBorrar();
          require_once("views/".$controller->view);
        }else{
          //TODO
          echo "Borrar persona";
        }
        break;
    }
  }else{
    $controller->cargar_inicio();
    require_once("views/".$controller->view);
  }

?>