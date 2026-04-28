<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <h2>Poznaj Smoki</h2>
</header>

<nav>
    <section id="blok1">Baza</section>
    <section id="blok2">Opisy</section>
    <section id="blok3">Galeria</section>
</nav>

<section id="main">
    <section id="sekcja1">
        <h3>Baza Smoków</h3>
    <form action="smoki.php" method="post">
    <label for="smok"></label>
    <select id="smok" name="smok">
        <?php
            
            $smoki = ["Francja", "Bułgaria", "Chiny", "Japonia","Polska"];

            foreach ($smoki as $s) {
                echo "<option value='$s'>$s</option>";
            }
        ?>
    </select>
    <button formaction="skrypt2.php" type="submit">Szukaj</button>
</form>

<table>
    <tr>
        <th>Nazwa</th>
        <th>Długość</th>
        <th>Szerokość</th>
    </tr>
</table>
</section>


    <section id="sekcja2">
        <h3>Opisy Smoków</h3>
      <dt>
        <dl>Smok czerwony
    Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.
		</dl>
        <dl>Smok zielony
    Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.
</dl>
    <dl> 
    Smok niebieski 
    Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dl>
      </dt>

    </section>


    <section id="sekcja3">
    <h3>Galeria:</h3>
    <img src="smok1.jpg" alt="Smok Czerwony">
    <img src="smok2.jpg" alt="Smok wielki">
    <img src="smok3.jpg" alt="Smok łaciaty">

    </section>
</section>



<footer>
    <p>Stronę opracował/a: Dariia S</p>
</footer>
</body>
</html>




</body>
</html>