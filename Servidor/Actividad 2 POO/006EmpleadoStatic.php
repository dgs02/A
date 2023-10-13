<?php
class EmpleadoStatic {
    private $nombre;
    private $apellidos;
    private $sueldo;
    private static $sueldoTope = 3333; // hola mis muetos
    private $telefonos = array();

    public function __construct(string $nombre, string $apellidos, int $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): array {
        return $this->telefonos;
    }

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $sueldoTope): void {
        self::$sueldoTope = $sueldoTope;
    }

    public static function toHtml(EmpleadoStatic $emp): string {
        $html = "<p>Nombre completo: " . $emp->getNombreCompleto() . "</p>";
        $html .= "<p>Sueldo: " . $emp->sueldo . "€</p>";

        $telefonos = $emp->listarTelefonos();
        if (!empty($telefonos)) {
            $html .= "<p>Teléfonos:</p>";
            $html .= "<ol>";
            foreach ($telefonos as $telefono) {
                $html .= "<li>$telefono</li>";
            }
            $html .= "</ol>";
        }

        return $html;
    }
}

// Ejemplo de uso
$empleado = new EmpleadoStatic("Juan", "Pérez", 4000);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo EmpleadoStatic::toHtml($empleado);
