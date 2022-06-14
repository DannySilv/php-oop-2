<?php
class Kennels {
  public $brand;
  public $material;
  public $size;
  public $purpose;
  public $price;

  function __construct($_brand, $_material, $_size, $_purpose, $_price)
  {
    $this->brand = $_brand;
    $this->material = $_material;
    $this->size = $_size;
    $this->purpose = $_purpose;
    $this->price = $_price;
  }
}
?>