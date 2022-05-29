<?php
require_once ('maths.php');
$number = $_GET["input"];
if((is_numeric($number)) || (ctype_digit($number)) && (int)$number > 0){
  echo faculty($number);
}  else {
  echo '
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
            <h5>Practice three</h5>
            <p>
                In ingave.html kan een geheel getal ingegeven worden. Via de submit-knop wordt de
                gebruiker doorverwezen naar verwerk.php
                In verwerk.php wordt de ingave eerst gecontroleerd, enkel positieve gehele getallen
                worden aanvaard. Van de ingave wordt de faculteit berekend en afgedrukt. Maak
                hiervoor de functie faculteit in het bestand wiskunde.php en laad dit bestand via
                require_once. Het resultaat (of misse ingave) wordt afgedrukt.
            </p>
        </section>
                <form class="form-group" action="index.html" method="post">
                  <label><strong>The given input was invalid!</strong></label>
                  <br>
                  <input class="btn btn-danger" type="submit" value="return">
                </form>
                </div>
            </body>
          </html>';
}