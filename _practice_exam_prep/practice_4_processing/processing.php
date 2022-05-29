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
            <h5>Practice two</h5>
            <p>
                Voorzie een formulier om naam en achtergrondkleur in te geven (ingave.html). Deze
                waarden worden in een cookie geplaatst in verwerking.php. In toon.php wordt de naam
                afgedrukt en de achtergrondkleur van de pagina ingesteld.
            </p>
        </section>
        <?php
        $name = htmlentities($_GET['name'], ENT_QUOTES, 'UTF-8');
        $color = htmlentities($_GET['bg_color'], ENT_QUOTES, 'UTF-8');

        setcookie('name', $name);
        setcookie('bg_color', $color);
        ?>
        <form class="form-group" action="show.php">
          <input class="btn btn-primary" type="submit" value="show">
        </form>
    </div>
</body>
</html>