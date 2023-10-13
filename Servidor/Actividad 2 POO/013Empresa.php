<?php
class Empresa {
    private $nombre;
    private $direccion;
    private $trabajadores = [];

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function anyadirTrabajador(Trabajador $t) {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml() : string {
        $html = "<h2>Trabajadores de {$this->nombre}</h2>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= $trabajador::toHtml($trabajador);
        }
        return $html;
    }

    public function getCosteNominas(): float {
        $costeTotal = 0.0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }
}

// Ejemplo de uso
$empresa = new Empresa("Mi Empresa", "Calle Principal");

$empleado1 = new Empleado('Juan', 'Perez', 25, ['123-456-7890'], 40, 15);
$gerente1 = new Gerente('María', 'López', 30, ['987-654-3210'], 60000, 10);

$empresa->anyadirTrabajador($empleado1);
$empresa->anyadirTrabajador($gerente1);

echo "Nombre de la empresa: " . $empresa->getNombre() . "<br>";
echo "Dirección de la empresa: " . $empresa->getDireccion() . "<br>";

echo $empresa->listarTrabajadoresHtml();

echo "Coste total en nóminas: $" . $empresa->getCosteNominas() . "<br>";
