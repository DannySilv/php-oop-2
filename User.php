<?php
class User {
  public $name;
  public $email;
  public $paymentAcceptable;
  public $registered = false;
  public $cart = [];

  function __construct($_name, $_email, $_paymentAcceptable) {
    $this->name = $_name;
    $this->email = $_email;
    $this->paymentAcceptable = $_paymentAcceptable;
  }
  
  function toCart($_product) {
    if ($_product->available) {
      $this->cart[] = $_product;
    } else {
      return false;
    }
  }

  function register() {
    $this->registered = true;
    return "Benvenuto " . "$this->name" . "! Ora sei registrato e potrai accedere ai nostri sconti!";
  }

  function getTotal() {
    $total = 0;
    foreach($this->cart as $element) {
      $total += $element->price;
      if ($this->registered) {
        return $total * 0.8;
      } else {
        return $total;
      }
    }
  }

  function isPaymentExpired() {
    return $this->paymentAcceptable;
  }
}
?>