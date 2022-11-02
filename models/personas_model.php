<?php

  include_once("Persona.php");
  include_once("DataBase.php");

  class personas_model{

    private $db_handler;

    public function __construct(){
      $this->db_handler = DataBase::connect();
    }

    /* Métodos CRUD */
    
    public function create($persona){
      $params=[':nombre'=>$persona->getNombre(),':apellidos'=>$persona->getApellidos(),':edad'=>$persona->getEdad(),':DNI'=>$persona->getDNI()];
      $pdo = $this->db_handler->prepare("INSERT INTO personas VALUES(:nombre,:apellidos,:edad,:DNI)");
      $pdo->execute($params);
      return $pdo->rowCount();
    }

    public function readAll(){
      $pdo = $this->db_handler->prepare("SELECT * FROM personas");
      $pdo->execute();
      $arrayPersonas=[];
      while($row = $pdo->fetch(PDO::FETCH_ASSOC)){
        $arrayPersonas[]=new Persona($row['nombre'],$row['apellidos'],$row['edad'],$row['DNI']);
      }
      return $arrayPersonas;
    }

    public function readById($DNI){
      $params=[':DNI'=>$DNI];
      $pdo = $this->db_handler->prepare("SELECT * FROM personas WHERE DNI=:DNI");
      $pdo->execute($params);
      $row=$pdo->fetch(PDO::FETCH_ASSOC);
      return $row;
    }

    public function delete($DNI){
      $params=[':DNI'=>$DNI];
      $pdo = $this->db_handler->prepare("DELETE FROM personas WHERE DNI=:DNI");
      $pdo->execute($params);
      return $pdo->rowCount();
    }

    public function update($persona){
      $params=[':nombre'=>$persona->getNombre(),':apellidos'=>$persona->getApellidos(),':edad'=>$persona->getEdad(),':DNI'=>$persona->getDNI()];
      $pdo = $this->db_handler->prepare("UPDATE personas SET nombre=:nombre,apellidos=:apellidos,edad=:edad WHERE DNI=:DNI");
      $pdo->execute($params);
      return $pdo->rowCount();
    }

    public function stadistics(){
      $pdo = $this->db_handler->prepare("SELECT count(*) as 'numPersonas',round(avg(edad),0) as 'edadMedia', max(edad) as 'edadMAX', min(edad) as 'edadMIN' FROM personas");
      $pdo->execute();
      $row = $pdo->fetch(PDO::FETCH_ASSOC);
      return $row;
    }

  }
?>