<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: white !important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="../home.html">
                    <figure style="overflow: hidden; height: 72px; width: auto;">
                        <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/14849.png" alt="logo" style="height: 88px; width: auto;">
                    </figure></a>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2"><a href="../practice_3_input_numbers/input.html">input one: numbers</a></li>
                        <li class="nav-item mx-2"><a href="../practice_4_processing/index.html">processing</a></li>
                        <li class="nav-item mx-2"><a href="../practice_5_whole_number/index.html">whole number</a></li>
                        <li class="nav-item mx-2"><a href="../practice_6_fibonacci/index.html">fibonnaci</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <section>
            <h5>Practice one</h5>
            <p>
                Maak een formulier in ingave.html. In dit formulier kan je een waarde ingeven voor
                aantal getallen. De gebruiker wordt doorverwezen naar getallen.php
                Controleer in getallen.php of de ingevoerde waarde een geheel getal is
                (http://php.net/manual/en/function.ctype-digit.php) groter dan 0. Indien dit niet zo is dan
                wordt de gebruiker via een header redirect doorgestuurd naar ingave.html. Indien wel
                een correcte waarde ingegeven is dan worden er evenveel tekstvelden getoond als deze
                waarde. Via een submit-knop wordt de gebruiker doorverwezen naar statistiek.php.
                In statistiek.php wordt het gemiddeldelde, de hoogste en de laagste waarde berekend en
                afgedrukt. Waarden die niet numerisch zijn worden hierbij niet in rekening gehouden
                (is_numeric). Misse waarden worden ook onderaan afgedrukt.
            </p>
        </section>
        <form class="form-group">
          <label>Enter in all the numbers: </label>
            <?php
            $number = $_GET['numberInput'];
            if(ctype_digit($number)){
                for($i = 0; $i < $number; $i++){
                  print('<input class="form-text" type="text" name="digits[]">');
                  print('<br>');
                }
              } else {
              header("location: input.html");
              }
            ?>
          <br>
          <input class="btn btn-primary" type="submit" formaction="statistics.php" formmethod="get">
        </form>
    </div>
</body>
</html>