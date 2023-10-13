<?php 

abstract class Persona {
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

    abstract public static function toHtml(Persona $p): string;
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

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            $empleado = $p;
            $html = '<p>Nombre completo: ' . $empleado->getNombreCompleto() . '</p>';
            $html .= '<p>Edad: ' . $empleado->getEdad() . ' años</p>';
            $html .= '<p>Salario: $' . $empleado->salario . '</p>';
            $html .= '<p>Teléfonos: ' . implode(', ', $empleado->telefonos) . '</p>';
            $html .= '<p>Debe pagar impuestos: ' . ($empleado->debePagarImpuestos() ? 'Sí' : 'No') . '</p>';
            return $html;
        } else {
            return parent::toHtml($p);
        }
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getTelefonos() {
        return $this->telefonos;
    }
}

// Ejemplo de uso
$persona = new Empleado('Juan', 'Perez', 25, 50000, ['123-456-7890', '987-654-3210']);
echo Empleado::toHtml($persona);
