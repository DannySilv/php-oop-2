<?php
class Games {
  public $material;
  public $size;
  public $price;

  function __construct($_material, $_size, $_price)
  {
    $this->material = $_material;
    $this->size = $_size;
    $this->price = $_price;
  }

  public function printInfo() {
    return "$this->material $this->size € $this->price";
  }
}
?>