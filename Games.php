<?php
class Games {
  public $brand;
  public $material;
  public $size;
  public $price;

  function __construct($_brand, $_material, $_size, $_price)
  {
    $this->brand = $_brand;
    $this->material = $_material;
    $this->size = $_size;
    $this->price = $_price;
  }
}
?>