<?php

interface Resizable
{
  public function resize(int|float $nuevoLado): self;
}


class Cuadrado implements Resizable
{
  public function __construct(public int|float $lado)
  {
  }

  public function resize(int|float $nuevoLado): self
  {
    $this->lado = $nuevoLado;
    return $this;
  }
}
