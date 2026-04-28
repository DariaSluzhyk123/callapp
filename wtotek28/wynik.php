<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matura</title>
    <link rel = "stylesheet" href = "styl.css">
</head>
<body>
    <header>
        <h1>System informacji dla maturzystów</h1>
    </header>
    <section class = "boczny">
        <img src = "ma.jpg" alt = "Matura">

        <img src = "tu.jpg" alt = "Matura">

        <img src = "ra.jpg" alt = "Matura">
    </section>
    <section class = "blok1">
        <?php
       $id = $_GET['id'];
       $imie = $_GET['imie'];
       $nazwisko = $_GET['nazwisko']; 
       echo "<h2>".$imie." ".$nazwisko."</h2>";
    $conn = mysqli_connect('localhost', 'root', '', 'matura');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        $zapytanie = "SELECT rok, sesja, przedmiot, punkty FROM `arkusz` INNER JOIN wynik on arkusz.symbol = wynik.symbol WHERE wynik.maturzysta_id =".$id;
        $wynik = mysqli_query($conn, $zapytanie);
        while ($row = mysqli_fetch_row($wynik)) {
            echo "<h3>" .$row[0]." " . $row[1]. "</h3><p>".$row[2].": ".$row[3]."</p>";
        }
        ?>
    </section>
    <section class = "blok2">
        <div class = "a1">
            <h4>Przedmioty</h4>
            <?php
            $zapytanie2 = "SELECT DISTINCT przedmiot FROM arkusz;";
            $wynik2 = mysqli_query($conn, $zapytanie2);
            while ($row2 = mysqli_fetch_row($wynik2)) {
                echo "$row2[0] ";
            }
            ?>
        </div>
        <div class = "a2">
            <h4>Lata</h4>
             <?php
            $zapytanie3 = "SELECT MIN(rok), MAX(rok) FROM `arkusz`;";
            $wynik3 = mysqli_query($conn, $zapytanie3);
            while ($row3 = mysqli_fetch_row($wynik3)) {
                echo "$row3[0] - $row3[1]";
            }
            ?>
        </div>
        <div class = "a3">
            <h4>Najlepszy wynik</h4>
            <?php
             $zapytanie4 = "SELECT maturzysta_id, AVG(punkty) AS wynik FROM wynik GROUP BY maturzysta_id ORDER BY wynik DESC LIMIT 1;";
            $wynik4 = mysqli_query($conn, $zapytanie4);
            while ($row4 = mysqli_fetch_row($wynik4)) {
                echo "$row4[1]%";
            }
            ?>
        </div>
        <div class = "a4">
            <h4>Najgorszy wynik</h4>
            <?php
             $zapytanie4 = "SELECT maturzysta_id, AVG(punkty) AS wynik FROM wynik GROUP BY maturzysta_id ORDER BY wynik ASC LIMIT 1;";
            $wynik4 = mysqli_query($conn, $zapytanie4);
            while ($row4 = mysqli_fetch_row($wynik4)) {
                echo "$row4[1]%";
            }
            ?>
        </div>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
    
</body>
</html>