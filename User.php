<?php
class User {
  public $name;
  public $email;
  public $paymentAcceptable = true;
  public $registered = true;
  public $cart = [];

  function __construct($_name, $_email) {
    $this->name = $_name;
    $this->email = $_email;
  }
  
  function toCart($_product) {
    $this->cart[] = $_product;
  }

  function getTotal($_registered, $_paymentAcceptable) {
    $total = 0;
    foreach($this->cart as $element) {
      if ($_registered->registered && $_paymentAcceptable->paymentAcceptable) {
        $newPrice = ($element->price * 100) / 20;
        $total += $newPrice;
        return true;
      } else if (!($_registered->registered) && $_paymentAcceptable->paymentAcceptable) {
        $total += $element->price;
        return false;
      }
    }
  }
}
?>