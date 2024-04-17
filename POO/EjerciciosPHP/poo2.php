<?php

/* Escriba una clase abstracta PHP llamada 'Animal' con métodos abstractos como 'eat()' y 'makeSound()'. Cree subclases como 'Perro', 'Gato' y 'Pájaro' que implementen estos métodos. */



abstract class Animales
{

  abstract public function eat();
  abstract public function makeSound();
}


class Tortuga extends Animales
{
  public function eat()
  {
    return 'Las tortugas comen de todo. Y mucho';
  }

  public function makeSound()
  {
    return 'Las tortugas solo emitan sonidos cuando hacen el amor';
  }
}

/* Escriba una clase PHP llamada 'Persona' con propiedades como 'nombre' y 'edad'. Implemente el método mágico '__toString()' para mostrar información de la persona. */

class Persona
{

  public function __construct(private string $nombre, private int $edad)
  {
  }


  public function __toString(): string
  {
    return "Esta persona se llama {$this->nombre}. Su edad es {$this->edad}";
  }
}


/*  Escriba una clase llamada 'Empleado' que extienda la clase 'Persona' y agregue propiedades como 'salario' y 'puesto'. Implementar métodos para mostrar los detalles de los empleados. */


class Empleado extends Persona
{
  public function __construct(
    private string $nombre,
    private int $edad,
    private float $salario,
    private string $puesto
  ) {
    parent::__construct($nombre, $edad);
  }

  /**
   * Get the value of nombre
   */
  public function getEmpleadoNombre(): string
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   */
  public function setEmpleadoNombre(string $nombre): self
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of nombre
   */
  public function getNombre(): string
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   */
  public function setNombre(string $nombre): self
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of edad
   */
  public function getEdad(): int
  {
    return $this->edad;
  }

  /**
   * Set the value of edad
   */
  public function setEdad(int $edad): self
  {
    $this->edad = $edad;

    return $this;
  }

  /**
   * Get the value of salario
   */
  public function getSalario(): float
  {
    return $this->salario;
  }

  /**
   * Set the value of salario
   */
  public function setSalario(float $salario): self
  {
    $this->salario = $salario;

    return $this;
  }

  /**
   * Get the value of puesto
   */
  public function getPuesto(): string
  {
    return $this->puesto;
  }

  /**
   * Set the value of puesto
   */
  public function setPuesto(string $puesto): self
  {
    $this->puesto = $puesto;

    return $this;
  }

  public function __toString(): string
  {
    return parent::__toString() .  " Su puesto es {$this->puesto} y su salario es {$this->salario}";
  }
}


$empleado = new Empleado('Juan', 30, 2000, 'programador');

echo $empleado;

/* Escriba una clase llamada 'Producto' con propiedades como 'nombre' y 'precio'. Implemente la interfaz 'Comparable' para comparar productos en función de sus precios. */

interface ComparableProductos
{
  public function compararProductos(ProductoDos $productoDos);
}


class ProductoDos implements ComparableProductos
{

  public function __construct(private string $nombre, private int $precio)
  {
  }

  public function compararProductos(ProductoDos $productoDos)
  {
    return match (true) {
      $this->precio > $productoDos->precio => 'Este producto es mayor',
      $this->precio < $productoDos->precio => 'El otro producto es mayor',
      default => 'Los productos valen lo mismo'
    };
  }
}
