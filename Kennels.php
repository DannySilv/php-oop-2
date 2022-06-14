<?php
class Kennels {
  public $name;
  public $material;
  public $size;
  public $purpose;
  public $price;
  public $available = true;

  function __construct($_name, $_material, $_size, $_purpose, $_price)
  {
    $this->name = $_name;
    $this->material = $_material;
    $this->size = $_size;
    $this->purpose = $_purpose;
    $this->price = $_price;
  }

  public function printInfo() {
    return "$this->name" . " - " . "$this->material" . ", " . "$this->size" . ", " . "$this->purpose" . ", " . "€ $this->price";
  }
}
?>