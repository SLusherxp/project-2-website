<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Crafty+Girls&display=swap" rel="stylesheet">

</head>

<body>
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
    <div class="row" id="content">
      <div class="col-12">
        <?php include("./invul.html"); ?>
      </div>
    </div>
    <div class="row" id="footer">
      <div class="col-12">
        <?php include("./footer.html"); ?>
      </div>
    </div> 
</body>
</html>