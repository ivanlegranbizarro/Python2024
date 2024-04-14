<?php

class Estudiante
{
  public function __construct(private string $nombre, private string $apellido, private int $edad, private array $calificaciones)
  {
  }

  public function convertirCalificaciones(): string
  {
    return implode(", ", $this->calificaciones);
  }

  public function __toString()
  {
    return "Nombre: {$this->nombre}, Apellido: {$this->apellido}, Edad: {$this->edad}, Calificaciones: {$this->convertirCalificaciones()}";
  }
}

$estudiante1 = new Estudiante("Iván", "Legrán", 38, [7, 8, 9, 10]);

echo $estudiante1;
