<?php


abstract class ItemBiblioteca
{
  public function __construct(protected int $isbn, protected string $autor, protected string $titulo)
  {
  }
  abstract public function insertar(): string;
  abstract public function buscar(): array;
  abstract public function modificar(): string;
  abstract public function borrar(): string;

  abstract public function __toString(): string;
}


class Libro extends ItemBiblioteca
{
  public function __construct(protected int $isbn, protected string $autor, protected string $editorial, protected string $titulo, protected int $nPaginas)
  {
    parent::__construct($isbn, $autor, $titulo);
  }

  public function insertar(): string
  {
    return "Insertar libro";
  }

  public function buscar(): array
  {
    return ["Libro"];
  }

  public function modificar(): string
  {
    return "Modificando libro";
  }

  public function borrar(): string
  {
    return "Borrando libro";
  }

  public function __toString(): string
  {
    return "{$this->isbn}, {$this->autor}, {$this->editorial}, {$this->titulo}, {$this->nPaginas}";
  }
}

class DVD extends ItemBiblioteca
{
  public function __construct(protected int $isbn, protected string $autor, protected string $director, protected string $titulo, protected int $duracion)
  {
    parent::__construct($isbn, $autor, $titulo);
  }

  public function insertar(): string
  {
    return "Insertar DVD";
  }

  public function buscar(): array
  {
    return ["DVD"];
  }

  public function modificar(): string
  {
    return "Modificando DVD";
  }

  public function borrar(): string
  {
    return "Borrando DVD";
  }

  public function __toString(): string
  {
    return "{$this->isbn}, {$this->autor}, {$this->director}, {$this->titulo}, {$this->duracion}";
  }
}
