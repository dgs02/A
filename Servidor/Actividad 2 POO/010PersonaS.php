<?php 
class Persona {
    protected $nombre;
    protected $apellidos;
    protected $edad;

    public function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function __toString(): string {
        $str = "Nombre completo: " . $this->getNombreCompleto() . "\n";
        $str .= "Edad: " . $this->getEdad() . " años\n";
        return $str;
    }
}

class Empleado extends Persona {
    protected $salario;
    protected $telefonos = [];

    public function __construct($nombre, $apellidos, $edad, $salario, $telefonos) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->salario = $salario;
        $this->telefonos = $telefonos;
    }

    public function debePagarImpuestos() {
        return ($this->edad > 21 && $this->salario > 0);
    }

    public function __toString(): string {
        $str = parent::__toString();
        $str .= "Salario: $" . $this->salario . "\n";
        $str .= "Teléfonos: " . implode(', ', $this->telefonos) . "\n";
        $str .= "Debe pagar impuestos: " . ($this->debePagarImpuestos() ? 'Sí' : 'No') . "\n";
        return $str;
    }
}

// Ejemplo de uso
$persona = new Persona('Juan', 'Perez', 25);
$empleado = new Empleado('María', 'López', 22, 50000, ['123-456-7890', '987-654-3210']);

echo $persona;
echo $empleado;
