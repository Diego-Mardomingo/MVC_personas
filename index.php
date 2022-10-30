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
        if(empty($_POST)){
          $datosAVista = $controller->listarTodo();
          $controller->cargarVistaActualizar();
          require_once("views/".$controller->view);
        }else{
          $datosAVista = $controller->listarTodo();
          $datosAVista2=$controller->listarPorDNI($_POST['DNI']);
          $controller->cargarVistaActualizar();
          require_once("views/".$controller->view);
        }
        break;
      case 'confirmar_actualizar':
        if(isset($_POST['confirmar_actualizar'])){
          $persona=new Persona($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['DNI']);
          $controller->actualizar($persona);
          $controller->cargar_inicio();
          require_once("views/".$controller->view);
        }
        break;
      case 'borrar':
        if(empty($_POST)){
          $datosAVista = $controller->listarTodo();
          $controller->cargarVistaBorrar();
          require_once("views/".$controller->view);
        }else{
          $datosAVista = $controller->listarTodo();
          $datosAVista2=$controller->listarPorDNI($_POST['DNI']);
          $controller->cargarVistaBorrar();
          require_once("views/".$controller->view);
        }
        break;
      case 'confirmar_borrado':
        if(isset($_POST['confirmar_borrado'])){
          $controller->borrar($_POST['DNI']);
          $controller->cargar_inicio();
          require_once("views/".$controller->view);
        }
        break;
    }
  }else{
    $controller->cargar_inicio();
    require_once("views/".$controller->view);
  }

?>