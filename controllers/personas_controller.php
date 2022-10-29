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

  }
?>