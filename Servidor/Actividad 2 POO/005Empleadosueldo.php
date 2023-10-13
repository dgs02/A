<?php
class EmpleadoSueldo {
    private $nombre;
    private $apellidos;
    private $sueldo;
    private static $sueldoTope = 3333; // Variable estática para el sueldo que debe pagar impuestos

    public function __construct(string $nombre, string $apellidos, int $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope; // Usar la variable estática sueldoTope
    }

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
    }
}

// Ejemplo de uso
$empleado1 = new EmpleadoSueldo("Juan", "Pérez");
$empleado2 = new EmpleadoSueldo("María", "González", 4000);

echo "Empleado 1\n";
echo "Nombre completo: " . $empleado1->getNombreCompleto() . "\n";
echo "Sueldo tope: " . EmpleadoSueldo::getSueldoTope() . "\n";
if ($empleado1->debePagarImpuestos()) {
    echo "Debe pagar impuestos.\n";
} else {
    echo "No debe pagar impuestos.\n";
}

echo "Empleado 2\n";
echo "Nombre completo: " . $empleado2->getNombreCompleto() . "\n";
echo "Sueldo tope: " . EmpleadoSueldo::getSueldoTope() . "\n";
if ($empleado2->debePagarImpuestos()) {
    echo "Debe pagar impuestos.\n";
} else {
    echo "No debe pagar impuestos.\n";
}

// Modificar el sueldo tope
EmpleadoSueldo::setSueldoTope(3500);

echo "Empleado 1 después de modificar el sueldo tope\n";
if ($empleado1->debePagarImpuestos()) {
    echo "Ahora debe pagar impuestos.\n";
} else {
    echo "Ahora no debe pagar impuestos.\n";
}

