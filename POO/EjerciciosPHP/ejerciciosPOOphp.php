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


class Circulo
{

  public function __construct(private int|float $radio)
  {
  }

  public function calcularArea(): int|float
  {
    return pi() * pow($this->radio, 2);
  }

  public function calcularCircunferencia(): int|float
  {
    return 2 * pi() * $this->radio;
  }
}
