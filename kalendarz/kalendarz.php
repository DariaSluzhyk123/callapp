<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalendarz</title>
    <link rel = "stylesheet" href = "styl.css">
</head>
<body>
    <header>
        <h1>Dni, miesiące, lata...</h1>
    </header>
    <section class = "napis">
        <p>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "kalendarz");
            $dniMiesiaca = date("m-d");
            $zapytanie = "SELECT imiona FROM `imieniny` WHERE data = '$dniMiesiaca';";
            $wynik = mysqli_query($conn, $zapytanie);

                $dniTygodnia = array(
                    "Monday" => "niedziela",
                    "Tuesday" => "poniedziałek",
                    "Wednesday" => "wtorek",
                    "Thursday" => "środa",
                    "Friday" => "czwartek",
                    "Saturday" => "piątek",
                    "Sunday" => "niedziela"
                );

                $dzisiejszyDzien = $dniTygodnia[date('l')];

                $imiona = " ";
                while ($wiersz = mysqli_fetch_assoc($wynik)) {
                    $imiona = $wiersz['imiona'] . " ";
                }


                echo "Dzisiaj jest $dzisiejszyDzien,  $dniMiesiaca." . date("d.m.y") . ".  imieniny obchodzą: $imiona";
            ?>
        </p>
    </section>

    <section class = "lewy">
        <table border="1">
    <tr>
        <th>liczba dni</th>
        <th>miesiąc</th>
    </tr>
    <tr>
        <td rowspan="7">31</td>
        <td>Styczeń</td>
    </tr>
    <tr><td>Marzec</td></tr>
    <tr><td>Maj</td></tr>
    <tr><td>Lipiec</td></tr>
    <tr><td>Sierpień</td></tr>
    <tr><td>Październik</td></tr>
    <tr><td>Grudzień</td></tr>

    <tr>
        <td rowspan="4">30</td>
        <td>Kwiecień</td>
    </tr>
    <tr><td>Czerwiec</td></tr>
    <tr><td>Wrzesień</td></tr>
    <tr><td>Listopad</td></tr>

    <tr>
        <td>28/29</td>
        <td>Luty</td>
    </tr>
</table>
    </section>    

<section class = "srodek">
    <h2>Sprawdź kto ma urodziny</h2>
    <form action="kalendarz.php" method="post">
        <input type="date" name="miesiac">
        <input type="submit" value="wyślij">
    </form>
    <?php
   echo "Dnia $dzisiejszyDzien,  $dniMiesiaca.  imieniny: $imiona";
    ?>
</section>    

<section class = "prawy">
    <img src="kalendarz.gif" alt="kalendarz">
    <h2>Rodzaje kalendarzy</h2>
    <ol>
        <li>Słoneczny</li>
        <ul>
        <li>kalendarz Majów</li>
        <li>juliański</li>
        <li>gregoriański</li>
    </ul>
        <li>Księżycowy</li>
        <ul>
        <li>starogrecki</li>
        <li>babiloński</li>
    </ul>
    </li>
    </ol>
</section>  

<footer>
    <p>Stronę wykonał: 00000000000</p>
</footer>




</body>
</html>