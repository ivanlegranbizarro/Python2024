<?php

abstract class Shape
{
  abstract public function calculateArea(): int|float;
}


class Triange extends Shape
{
  public function __construct(private int|float  $base, private int|float  $altura)
  {
  }

  public function calculateArea(): int|float
  {
    return $this->base * $this->altura / 2;
  }
}

class Rectangle extends Shape
{
  public function __construct(private int|float $largo, private int|float $ancho)
  {
  }

  public function calculateArea(): int|float
  {
    return $this->largo * $this->ancho;
  }
}
