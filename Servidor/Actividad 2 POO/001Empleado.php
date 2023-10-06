<?php 

class Empleado{
    private String $nombre;
    private String $apellidos;
    private int $sueldo;

    public function __construct(String $nombre, String $apellidos, int $sueldo){

    }

    public function getNombre($nombre){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido($apellidos){
        return $this->apellidos;
    }
    public function setApellido($apellidos){
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getSueldo($sueldo){
        return $this->nombre;
    }
    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
        return $this;
    }

    public function getNombreCompleto(): String{
        $nombreCompleto = $this->nombre ." ". $this->apellidos;
        return $nombreCompleto;
    }

    public function debePagarImpuestos() : bool{
        if($this->sueldo > 3333){
            $bol = true;
            return $bol;
        }
        else{
            $bol = false;
            return $bol;
        }
        
    }

}