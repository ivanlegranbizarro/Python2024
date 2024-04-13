<?php

class Vehiculo
{
  public function __construct(private string $marca, private string $modelo, private int $año): void
  {
  }

  public function __toString(): string
  {
    return "{$this->marca}, {$this->modelo}, {$this->año}";
  }
}


$cocheAbuelo = new Vehiculo('Seat', 'Ritmo', 1989);


echo $cocheAbuelo;
