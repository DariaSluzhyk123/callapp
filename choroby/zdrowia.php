<?php
$conn = mysqli_connect("localhost", "root", "", "choroby");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wykaz chorób</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Informacja o chorobach w Polsce</h1>
    </header>
    <nav>
        <a href="https://szpitale.pl/">Szpitale</a>
        <a href="https://www.przychodnie.pl/">Przychodnie</a>
        <a href="https://www.nfz.gov.pl/">NFZ</a>
    </nav>
    <main>
        <section class="lewa">
            <h2>Choroby zakaźne</h2>
            <ol>
                <?php
                    $zapytanie1 = "SELECT nazwa FROM `choroby` WHERE zakazna ='T' GROUP BY(nazwa);";
                    $wynik = mysqli_query($conn, $zapytanie1);
                        while($row = mysqli_fetch_row($wynik)){
                            echo "<li>". $row['0'] ."</li>";
                    }
                ?>
            </ol>
        </section>
        <section class="prawa">
            <h2>Objawy chorób</h2>
            <form method="POST">
            <select name="choroba">
            <?php
                $zapytanie2 = "SELECT id, nazwa FROM `choroby`;";
                $wynik2 = mysqli_query($conn, $zapytanie2);
                    while($row = mysqli_fetch_row($wynik2)){
                        echo "<option>". $row['1'] ."</option>";
                    }
            ?>
            </select>
            <input type="submit" value="sprawdź">
            </form>
            <div id="skrypt3">
                <?php
                    if(isset($_POST["choroba"])){
                        $id = $_POST["choroba"];
                    }
                    $zapytanie3 = "SELECT objawy.nazwa FROM `objawy` JOIN choroby ON objawy.nazwa = choroby.nazwa WHERE objawy.id = $id;";
                    $wynik3 = mysqli_query($conn, $zapytanie3);
                    while($row = mysqli_fetch_row($wynik3)){
                        echo "<span>". $row['objaw'] ."</span>";
                    }

                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>Strone opracował/a: 0000000</p>
    </footer>
    <img id="zdrowie" src="zdrowia.png" alt="Życzymy zdrowia!">


<?php
$conn->close();
?>
</body>
</html>
