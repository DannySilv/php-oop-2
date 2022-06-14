<?php
class Kennels {
  public $material;
  public $size;
  public $purpose;
  public $price;

  function __construct($_material, $_size, $_purpose, $_price)
  {
    $this->material = $_material;
    $this->size = $_size;
    $this->purpose = $_purpose;
    $this->price = $_price;
  }

  public function printInfo() {
    return "$this->material $this->size $this->purpose € $this->price";
  }
}
?>