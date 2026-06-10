<?php
$conn = mysqli_connect("localhost", "root", "", "opony");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPONY</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <section class="boczny">
            <?php
                $zapytanie1 = "SELECT cena, nr_kat, producent, model, sezon FROM `opony` ORDER BY cena LIMIT 10;";
                $wynik = mysqli_query($conn, $zapytanie1);
                while($row = mysqli_fetch_assoc($wynik)){
                echo "<div class='opona'>";
                if ($row['sezon'] == 'letnia') {
                    echo "<img src='lato.png' alt='lato'>";
                } elseif ($row['sezon'] == 'zimowa') {
                    echo "<img src='zima.png' alt='zima'>";
                } else {
                    ($row['sezon'] == 'uniwersalna');
                    echo "<img src='uniwer.png' alt='uniwersalna'>";
                }
                echo "<h4>Opona:". $row['producent']. " " .$row['model']. "</h4>";
                echo "<h3>Cena:". $row['cena']."</h3>";
                }
            ?>
            <a href="https://opona.pl/"><p>więcej ofert</p></a>
        </section>
        <section class="s1">
            <img src="opona.jpg" alt="Opona">
            <h2>Opona dnia</h2>
            <?php
                $zapytanie2 = "SELECT producent, model, sezon, cena FROM `opony` WHERE nr_kat = 9;";
                $wynik = mysqli_query($conn, $zapytanie2);
                if($row = mysqli_fetch_assoc($wynik)){
                echo "<h2>". $row['producent']. "model" .$row['model']. "</h2>";
                echo "<h2>Sezon". $row['sezon']. "</h2>";
                echo "<h2>Tylko". $row['cena']. "zł!</h2>";
                }
            ?>
        </section>
        <section class="s2">
            <h2>Najnowsze zamówienie</h2>
            <?php
            $zapytanie3 = "SELECT id_zam, ilosc, cena, model FROM `zamowienie` JOIN opony USING (nr_kat) ORDER BY RAND() LIMIT 1;";
                $wynik = mysqli_query($conn, $zapytanie3);
                if($row = mysqli_fetch_assoc($wynik)){
                echo "<h2>". $row['id_zam']. " " .$row['ilosc']. "sztuki modelu" .$row['model']. "</h2>";
                echo "<h2>Wartość zamówienia". $row['cena']. "zł</h2>";
                }
            ?>
        </section>
    </main>
    <footer>
        <p>Strone wykonał/a: Dariia Sluzhynska, pesel</p>
    </footer>
</body>
</html>
<?php
$conn->close();
?>