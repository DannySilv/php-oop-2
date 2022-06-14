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
      return true;
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
      $total = $total + $element->price;
      if ($this->registered) {
        $discount = $total * 20 / 100;
        $newPrice = $total - $discount;
        return $newPrice;
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