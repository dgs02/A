<?php
class Persona {
    protected $nombre;
    protected $apellidos;

    public function __construct($nombre, $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }
}

class Empleado extends Persona {
    protected $salario;
    protected $telefonos = [];

    public function __construct($nombre, $apellidos, $salario, $telefonos) {
        parent::__construct($nombre, $apellidos);
        $this->salario = $salario;
        $this->telefonos = $telefonos;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getTelefonos() {
        return $this->telefonos;
    }
}

// Ejemplo de uso
$empleado = new Empleado('Juan', 'Perez', 50000, ['123-456-7890', '987-654-3210']);
echo "Nombre completo: " . $empleado->getNombreCompleto() . "\n";
echo "Salario: $" . $empleado->getSalario() . "\n";
echo "Teléfonos: " . implode(', ', $empleado->getTelefonos()) . "\n";
