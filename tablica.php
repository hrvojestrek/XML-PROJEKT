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
    
    <table class="container table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col" class="text-center">Ime</th>
          <th scope="col" class="text-center">Prezime</th>
          <th scope="col" class="text-center">Pozicija</th>
          <th scope="col" class="text-center">Broj</th>
          <th scope="col" class="text-center">Datum Rođenja</th>
          <th scope="col" class="text-center">Godine</th>
          <th scope="col" class="text-center">Nastupi</th>
          <th scope="col" class="text-center">Golovi</th>
          <th scope="col" class="text-center">Klub</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($xml->nogometas as $nogometas) { ?>
        <tr>
          <td class="text-center"><?php echo $nogometas->ime; ?></td>
          <td class="text-center"><?php echo $nogometas->prezime; ?></td>
          <td class="text-center"><?php echo $nogometas->pozicija; ?></td>
          <td class="text-center"><?php echo $nogometas->broj; ?></td>
          <td class="text-center"><?php echo $nogometas->datumRodjenja; ?></td>
          <td class="text-center"><?php echo $nogometas->godine; ?></td>
          <td class="text-center"><?php echo $nogometas->nastupi; ?></td>
          <td class="text-center"><?php echo $nogometas->golovi; ?></td>
          <td class="text-center"><?php echo $nogometas->klub; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <div class="container-fluid bg-dark p-3 mt-5 text-center">
        <span class="navbar-brand mb-0 h1 text-light">Hrvoje Štrek</span>
    </div>

  </body>
</html>
