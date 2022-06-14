<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/Kennels.php";
require_once __DIR__ . "/User.php";

$croccantini = new Food("Friskies", "Cibo Secco", "1Kg", "07/24", 10);
$umido = new Food("Purina", "Umido", "500Gr", "11/22", 7);
$gelatina = new Food("Royal Canin", "Gelatina", "400Gr", "10/22", 5);

$palla = new Games("Gomma", "Piccola", 3);
$gomitolo = new Games("Tessuto", "Media", 4);
$tiragraffi = new Games("Cartone", "Grande", 16);

$cuccia1 = new Kennels("Pelliccia artificiale e plastica", "2x4", "Interno", 19);
$cuccia2 = new Kennels("Legno e cotone", "6x4", "Esterno", 25);
$cuccia3 = new Kennels("Legno e lana", "10x15", "Esterno", 40);

$daniele = new User("Daniele", "daniele@hotmail.it");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PhpOop2</title>
</head>
<body>
  <h1>I Nostri Prodotti</h1>
  <div class="products-container">
    <div class="col">
      <ul>
          <li> Croccantini - <?php echo $croccantini->printInfo(); ?> </li>
          <li> Umido - <?php echo $umido->printInfo(); ?> </li>
          <li> Gelatina - <?php echo $gelatina->printInfo(); ?> </li>
      </ul>
    </div>
    <div class="col">
      <ul>
          <li> Palla - <?php echo $palla->printInfo(); ?> </li>
          <li> Gomitolo - <?php echo $gomitolo->printInfo(); ?> </li>
          <li> Tiragraffi - <?php echo $tiragraffi->printInfo(); ?> </li>
      </ul>
    </div>
    <div class="col">
      <ul>
          <li> Cuccia Piccola - <?php echo $cuccia1->printInfo(); ?> </li>
          <li> Cuccia Media - <?php echo $cuccia2->printInfo(); ?> </li>
          <li> Cuccia Grande - <?php echo $cuccia3->printInfo(); ?> </li>
      </ul>
    </div>
  </div>

  <div class="cart">
    <h2>Ciao <?php echo $daniele->name; ?>! Questo è il tuo carrello:</h2>
      <ul>
          <?php foreach($daniele->cart as $element) { ?>
          <li><?php echo $element->printInfo(); ?></li>
          <?php } ?>
      </ul>
    <h3>Totale: € <?php echo $daniele->getTotal($daniele->registered, $daniele->paymentAcceptable); ?></h3>
  </div>
</body>
</html>