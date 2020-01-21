<main class="container">
    <div class="row" id="header">
      <div class="col-12">
        <?php include("./header.html"); ?>
      </div>
    </div>
    <div class="row bg-light" id="navigation">
      <div class="col-12">
        <?php include("./navigation.php"); ?>
      </div>
    </div>
</main>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Crafty+Girls&display=swap" rel="stylesheet">

<?php
// echo "<p>Hallo Wereld!</p>";
// Declareren van de variabele $jpg_plaatje met tekst-inhoud

// Declareren van een variabele met een getal als inhoud.
$getal1 = 42.34;
$getal2 = 14.66;
$som = $getal1 + $getal2;

// echo "Het eerste getal is: " . $getal1 . "<br>";

// echo "De som van " . $getal1 . " + " . $getal2 . " = " . $som . "<br>";

$card_img_01 = "./img/pakje_1.jpg";
$card_title_01 = "Cadeautjes";
$card_text_01 = "Op Pakjesavond geef je elkaar een cadeau, een surprise en een gedicht!";
$card_btn_01 = "Klik hier!";

$marsepein = array(
  "./img/marsepein_1.png",
  "Marsepein",
  "Marsepein is een mengsel van gemalen amandelen en suiker",
  "Klik hier!"
);
// Dit is een indexed array. De laatjes van de ladekast hebben nummers.
$staf = array(
  "./img/staf_1.png",
  "Staf van Sinterklaas",
  "Sinterklaas in een herder/bisschop en die hebben altijd een staf bij zich",
  "Klik Hier!"
);
// Dit is een associatief array. Dat wil zeggen de laatjes van de ladekast hebben nu geen nummers maar namen.
$stoomboot = array(
  "image_path" => "./img/stoomboot_1.png",
  "title"      => "Stoomboot",
  "text"       => "Sinterklaas komt altijd met de stoomboot uit Spanje. De boot is gevuld met cadeaus",
  "btn_text"   => "Klik Hier!"
);

$mijter = array(
  "image_path" => "./img/mijter_1.png",
  "title"      => "Mijter",
  "text"       => "Sinterklaas heeft een mijter op omdat het vaak koud is in Nederland.",
  "btn_text"   => "Klik Hier!"
);

$schimmel = array(
  "image_path" => "./img/schimmel_1.png",
  "title"      => "Schimmel",
  "text"       => "Sinterklaas heeft een schimmelpaard. Hij rijdt hiermee door heel Nederland",
  "btn_text"   => "Klik Hier!"
);
?>


<div class="row">
  <div class="col-4">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $card_img_01; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $card_title_01; ?></h5>
        <p class="card-text"><?php echo $card_text_01; ?></p>
        <a href="#" class="btn btn-primary"><?php echo $card_btn_01; ?></a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $marsepein[0]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $marsepein[1]; ?></h5>
        <p class="card-text"><?php echo $marsepein[2]; ?></p>
        <a href="#" class="btn btn-primary"><?php echo $marsepein[3]; ?></a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $staf[0]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $staf[1]; ?></h5>
        <p class="card-text"><?php echo $staf[2]; ?></p>
        <a href="#" class="btn btn-primary"><?php echo $staf[3]; ?></a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $stoomboot["image_path"]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $stoomboot["title"]; ?></h5>
        <p class="card-text"><?php echo $stoomboot['text']; ?></p>
        <a href="#" class="btn btn-primary"><?php echo $stoomboot["btn_text"]; ?></a>
      </div>
    </div>
  </div>
  <div class="col-4">
  <div class="card" style="width: 18rem;">
      <img src="<?php echo $mijter["image_path"]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $mijter["title"]; ?></h5>
        <p class="card-text"><?php echo $mijter['text']; ?></p>
        <a href="#" class="btn btn-primary"><?php echo $mijter["btn_text"]; ?></a>
      </div>
    </div>
  </div>
  <div class="col-4">
  <div class="card" style="width: 18rem;">
      <img src="<?php echo $schimmel["image_path"]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $schimmel["title"]; ?></h5>
        <p class="card-text"><?php echo $schimmel['text']; ?></p>
        <a href="#" class="btn btn-primary"><?php echo $schimmel["btn_text"]; ?></a>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>