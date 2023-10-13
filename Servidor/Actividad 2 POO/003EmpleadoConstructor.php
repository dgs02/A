<?php
class EmpleadoConstructor {
    private $nombre;
    private $apellidos;
    private $sueldo;

    public function __construct(string $nombre, string $apellidos, int $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }
}

// Ejemplo de uso
$empleado1 = new EmpleadoConstructor("Juan", "Pérez");
$empleado2 = new EmpleadoConstructor("María", "González", 4000);

echo "Empleado 1\n";
echo "Nombre completo: " . $empleado1->getNombreCompleto() . "\n";
if ($empleado1->debePagarImpuestos()) {
    echo "Debe pagar impuestos.\n";
} else {
    echo "No debe pagar impuestos.\n";

}

echo "Empleado 2\n";
echo "Nombre completo: " . $empleado2->getNombreCompleto() . "\n";
if ($empleado2->debePagarImpuestos()) {
    echo "Debe pagar impuestos.\n";
} else {
    echo "No debe pagar impuestos.\n";
}

