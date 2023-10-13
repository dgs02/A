<?php 
abstract class Trabajador {
    protected $nombre;
    protected $apellidos;
    protected $edad;
    protected $telefonos = [];

    public function __construct($nombre, $apellidos, $edad, $telefonos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->telefonos = $telefonos;
    }

    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getTelefonos() {
        return $this->telefonos;
    }

    abstract public function calcularSueldo();
}

class Empleado extends Trabajador {
    protected $horasTrabajadas;
    protected $tarifaPorHora;

    public function __construct($nombre, $apellidos, $edad, $telefonos, $horasTrabajadas, $tarifaPorHora) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaPorHora = $tarifaPorHora;
    }

    public function calcularSueldo() {
        return $this->horasTrabajadas * $this->tarifaPorHora;
    }
}

class Gerente extends Trabajador {
    protected $salarioBase;
    protected $incrementoSalario;

    public function __construct($nombre, $apellidos, $edad, $telefonos, $salarioBase, $incrementoSalario) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
        $this->incrementoSalario = $incrementoSalario;
    }

    public function calcularSueldo() {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
    }
}

// Ejemplo de uso
$empleado = new Empleado('Juan', 'Perez', 25, ['123-456-7890'], 40, 15);
$gerente = new Gerente('María', 'López', 30, ['987-654-3210'], 60000, 10);

echo "Empleado:<br>";
echo "Nombre completo: " . $empleado->getNombreCompleto() . "<br>";
echo "Edad: " . $empleado->getEdad() . " años<br>";
echo "Teléfonos: " . implode(', ', $empleado->getTelefonos()) . "<br>";
echo "Sueldo: $" . $empleado->calcularSueldo() . "<br>";

echo "<br>Gerente:<br>";
echo "Nombre completo: " . $gerente->getNombreCompleto() . "<br>";
echo "Edad: " . $gerente->getEdad() . " años<br>";
echo "Teléfonos: " . implode(', ', $gerente->getTelefonos()) . "<br>";
echo "Sueldo: $" . $gerente->calcularSueldo() . "<br>";
