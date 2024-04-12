<?php


class Coche
{
  public function __construct(private string $color = 'verde', private int $ruedas = 4, private bool $arrancado = false)
  {
  }

  /**
   * Get the value of color
   */
  public function getColor(): string
  {
    return $this->color;
  }

  /**
   * Get the value of ruedas
   */
  public function getRuedas(): int
  {
    return $this->ruedas;
  }

  /**
   * Get the value of arrancado
   */
  public function getArrancado(): bool
  {
    return $this->arrancado;
  }

  /**
   * Set the value of color
   */
  public function setColor(string $color): self
  {
    $this->color = $color;

    return $this;
  }

  /**
   * Set the value of ruedas
   */
  public function setRuedas(int $ruedas): self
  {
    $this->ruedas = $ruedas;
    return $this;
  }

  /**
   * Set the value of arrancado
   */
  public function setArrancado(bool $arrancado): self
  {
    $this->arrancado = $arrancado;
    return $this;
  }

  public function __toString()
  {
    return "Color: {$this->color}, Ruedas: {$this->ruedas}, Arrancado: " . ($this->arrancado ? 'Sí' : 'No');
  }
}

// Crear una instancia de Coche
$miCoche = new Coche();

// Arrancar el coche
$miCoche->setArrancado(true);

// Imprimir el coche por pantalla
echo $miCoche;

echo '<br>';
echo '<br>';

// Frenar el coche
$miCoche->setArrancado(false);

// Imprimir el coche por pantalla
echo $miCoche;
