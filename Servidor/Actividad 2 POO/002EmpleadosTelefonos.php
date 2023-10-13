<?php
class EmpleadoTelefonos extends Empleado {
    private $telefonos = array();

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = array();
    }
}

// Ejemplo de uso
$empleado = new EmpleadoTelefonos("Juan", "Pérez", 4000);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Nombre completo: " . $empleado->getNombreCompleto() . "\n";
if ($empleado->debePagarImpuestos()) {
    echo "Debe pagar impuestos.\n";
} else {
    echo "No debe pagar impuestos.\n";
}
echo "Teléfonos: " . $empleado->listarTelefonos() . "\n";

$empleado->vaciarTelefonos();
echo "Teléfonos después de vaciar: " . $empleado->listarTelefonos() . "\n";
