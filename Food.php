<?php
class Food {
  public $brand;
  public $type;
  public $weight;
  public $expireDate;
  public $price;

  function __construct($_brand, $_type, $_weight, $_expireDate, $_price)
  {
    $this->brand = $_brand;
    $this->type = $_type;
    $this->weight = $_weight;
    $this->expireDate = $_expireDate;
    $this->price = $_price;
  }
}
?>