<?php

class Persona{
  private $nombre;
  private $apellidos;
  private $edad;
  private $DNI;

  public function __construct($nombre,$apellidos,$edad,$DNI){
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->edad = $edad;
    $this->DNI = $DNI;
  }

  public function getNombre(){return $this->nombre;}
  public function setNombre($nombre){$this->nombre=$nombre;}

  public function getApellidos(){return $this->apellidos;}
  public function setApellidos($apellidos){$this->apellidos=$apellidos;}

  public function getEdad(){return $this->edad;}
  public function setEdad($edad){$this->edad=$edad;}

  public function getDNI(){return $this->DNI;}
  public function setDNI($DNI){$this->DNI=$DNI;}

  public function __toString(){
    return "[Nombre: ".$this->nombre.", apellidos: ".$this->apellidos.", edad: ".$this->edad.", DNI: ".$this->DNI."]";
  }

}
?>