<?php
$xml = simplexml_load_file("nogometasi.xml");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hrvoje Štrek - PROJEKT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container-fluid bg-dark p-3 mb-5 text-center">
        <span class="navbar-brand mb-0 h1 text-light">HRVATSKA REPREZENTACIJA</span>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <p><a href="tablica.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">PRIKAŽI U TABLICI</a></p>
            </div>
            <div class="col">
                <p><a href="index.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">HOME</a></p>
            </div>
            <div class="col">
                <p><a href="grafika.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">PRIKAŽI U GRAFICI</a></p>
            </div>
        </div>
    </div>

    <?php foreach($xml->nogometas as $nogometas) { ?>
    <div class="container text-center mt-5">
        <hr>
        <img src="images/<?php echo $nogometas->slika; ?>" style="width: 300px">
        <h4 class="text-white bg-danger p-1"><?php echo $nogometas->ime; ?> <?php echo $nogometas->prezime; ?></h4>
        <h4 class="text-danger"><?php echo $nogometas->broj; ?></h4>
        <h6>Datum rođenja: <?php echo $nogometas->datumRodjenja; ?> (<?php echo $nogometas->godine; ?>)</h6>
        <h6>Nastupi: <?php echo $nogometas->nastupi; ?></h6>
        <h6>Golovi: <?php echo $nogometas->golovi; ?></h6>
        <h6>Klub: <?php echo $nogometas->klub; ?></h6>
    </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <div class="container-fluid bg-dark p-3 mt-5 text-center">
        <span class="navbar-brand mb-0 h1 text-light">Hrvoje Štrek</span>
    </div>

  </body>
</html>
