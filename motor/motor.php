<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel ="stylesheet" href="styl.css">
</head>
<body>
    <img src="motor.png" alt="Motocykle">

<header>
    <h1><i>Motocykle - moja pasja</i></h1>
</header>

<section class = "lewy">
<h2>Gdzie pojechać ?</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "motory");
    $zapytanie = "SELECT nazwa, opis, poczatek, zdjecia.zrodlo FROM `wycieczki` INNER JOIN zdjecia on wycieczki.zdjecia_id = zdjecia.id ;";
    $wynik = mysqli_query($conn, $zapytanie);
    while ($wiersz = mysqli_fetch_row($wynik)) {
        echo "<dt>" . $wiersz[0] . ", rozpoczyna sie w $wiersz[2], <a href='$wiersz[3].jpg'alt='zdecia'>Zobacz zdjęcie</a></dt>"  ;
        echo "<dl> " . $wiersz[1] . " </dl>";
    }

    ?>

</section>
<section class = "prawy1">
<h2>Co kupić?</h2>
<ol>
    <li>Honda CBR125R</li>
    <li>Yamaha YBR125</li>
    <li>HondaVFR800i</li>
    <li>Honda CBR1100XX</li>
    <li>BMW R1200GS LC</li>
</ol>
</section>
<section class = "prawy2">
    <h2>Statystyki</h2>
    <p>Wpisanych wycieczek:</p>
    <?php

    ?>
    <p>Użytkowników forum: 200</p>
    <p>Przesłanych zdjęć: 1300</p>
</section>

<footer>
 <p>Stronę wykonała: 79479517</p>
</footer>

</body>
</html>