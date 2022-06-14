<?php
class Games {
  public $name;
  public $material;
  public $size;
  public $price;
  public $available = true;

  function __construct($_name, $_material, $_size, $_price)
  {
    $this->name = $_name;
    $this->material = $_material;
    $this->size = $_size;
    $this->price = $_price;
  }

  public function printInfo() {
    return "$this->name" . " - " . "$this->material" . ", " . "$this->size" . ", " . "€ $this->price";
  }
}
?>