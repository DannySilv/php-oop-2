<?php
class User {
  public $name;
  public $email;
  public $payment;
  public $registered = true;
  public $cart = [];

  function __construct($_name, $_email, $_payment) {
    $this->name = $_name;
    $this->email = $_email;
    $this->payment = $_payment;
  }
  
  function toCart($_product) {
    $this->cart[] = $_product;
  }

  function getTotal($_registered) {
    $total = 0;
    foreach($this->cart as $element) {
      if ($_registered->registered) {
        $newPrice = ($element->price * 100) / 20;
        $total += $newPrice;
        return true;
      } else {
        $total += $element->price;
        return false;
      }
    }
  }
}
?>