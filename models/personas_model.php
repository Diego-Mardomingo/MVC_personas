<?php

  include_once("Persona.php");
  include_once("DataBase.php");

  class personas_model{

    private $db_handler;

    public function __construct(){
      $this->db_handler = DataBase::connect();
    }

    /* Métodos CRUD */
    //TODO Métodos 
  }

?>