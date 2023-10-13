<?php
class Persona {
    protected $nombre;
    protected $apellidos;

    public function __construct($nombre, $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public static function toHtml(Persona $p): string {
        $html = '<p>Nombre completo: ' . $p->nombreCompleto() . '</p>';
        return $html;
    }

    public function nombreCompleto() {
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

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            $empleado = $p;
            $html = '<p>Nombre completo: ' . $empleado->nombreCompleto() . '</p>';
            $html .= '<p>Salario: $' . $empleado->salario . '</p>';
            $html .= '<p>Teléfonos: ' . implode(', ', $empleado->telefonos) . '</p>';
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
$persona = new Persona('Juan', 'Perez');
$empleado = new Empleado('María', 'López', 50000, ['123-456-7890', '987-654-3210']);

echo Empleado::toHtml($persona); // Imprimirá solo el nombre completo de la persona
echo Empleado::toHtml($empleado); // Imprimirá el nombre completo, salario y teléfonos del empleado
