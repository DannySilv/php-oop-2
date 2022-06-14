<?php
class Food {
  public $name;
  public $brand;
  public $type;
  public $weight;
  public $expireDate;
  public $price;
  public $available = true;

  function __construct($_name, $_brand, $_type, $_weight, $_expireDate, $_price)
  {
    $this->name = $_name;
    $this->brand = $_brand;
    $this->type = $_type;
    $this->weight = $_weight;
    $this->expireDate = $_expireDate;
    $this->price = $_price;
  }

  public function printInfo() {
    return "$this->name" . " - " . "$this->brand" . ", " . "$this->type" . ", " . "$this->weight" . ", " . "$this->expireDate" . ", " . "€ $this->price";
  }
}
?>