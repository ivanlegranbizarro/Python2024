<?php

class Rectangulo
{
  public function __construct(private int|float $largo, private int|float $ancho)
  {
  }

  public function calcularArea(): int|float
  {
    return $this->largo * $this->ancho;
  }

  public function calcularPerimetro(): int|float
  {
    return ($this->largo + $this->ancho) * 2;
  }
}


$rectangulo1 = new Rectangulo(4, 6);

echo "El área del rectángulo es: " . $rectangulo1->calcularArea() . "<br>";

echo "El perímetro del rectángulo es: " . $rectangulo1->calcularPerimetro() . "<br>";
