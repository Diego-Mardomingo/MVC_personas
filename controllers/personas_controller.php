<?php
  include_once("models/personas_model.php");

  class personas_controller{

    private $pers_model;
    
    public $view;
    public $view_title;

    public function __construct(){
      $this->pers_model = new personas_model();
    }

    public function cargar_inicio(){
      $this->view = "menu.php";
      $this->view_title = "Menú de opciones (CRUD)";
    }

    /* Métodos CRUD */

    public function crear(){
      $this->pers_model->create(new Persona($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['DNI']));
      $this->view = "menu.php";
      $this->view_title = "Menu (CRUD)";
    }

    public function cargarVistaCrear(){
      $this->view = "crearPersona_view.php";
      $this->view_title = "Añadir una persona a la base de datos";
    }

    public function listarTodo(){
      $this->view = "listarTodo_view.php";
      $this->view_title = "Listar todas las notas";
      return $this->pers_model->readAll();
    }

    public function borrar(){

    }

    public function cargarVistaBorrar(){
      $this->view = "borrarPersona_view.php";
      $this->view_title = "Borrar una persona de la base de datos";
    }

  }
?>