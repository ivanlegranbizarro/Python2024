<?php

//  Escriba una clase llamada 'Producto' con propiedades como 'nombre' y 'precio'. Implemente la interfaz 'Comparable' para comparar productos en función de sus precios.


interface Comparable
{
  public function compararPrecios(Producto $otro): string;
}

class Producto implements Comparable
{
  public function __construct(
    private string $nombre,
    private float $precio
  ) {
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
   * Get the value of precio
   */
  public function getPrecio(): float
  {
    return $this->precio;
  }

  /**
   * Set the value of precio
   */
  public function setPrecio(float $precio): self
  {
    $this->precio = $precio;

    return $this;
  }

  public function compararPrecios(Producto $otro): string
  {
    return match (true) {
      $this->getPrecio() > $otro->getPrecio() => "El precio de {$this->getNombre()} es mayor que {$otro->getNombre()}",
      $this->getPrecio() < $otro->getPrecio() => "El precio de {$this->getNombre()} es menor que {$otro->getNombre()}",
      default => "{$this->getNombre()} es igual a {$otro->getNombre()}",
    };
  }
}


$ordenador = new Producto('Ordenador', 2000);
$impresora = new Producto('Impresora', 1000);
echo $ordenador->compararPrecios($impresora);
