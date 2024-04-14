<?php

abstract class Animal
{
  public function __construct(protected string $name)
  {
  }

  abstract public function comer(): string;
  abstract public function suena(): string;
}


class Perro extends Animal
{
  public function __construct(protected string $name, protected int $numero_patas = 4)
  {
    parent::__construct($name);
  }

  public function comer(): string
  {
    return 'El perro come pienso para perros';
  }

  public function suena(): string
  {
    return 'El perro ladra haciendo guau, guau';
  }
}


$perro1 = new Perro('Firulais');
