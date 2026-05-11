<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mieszalnia farb</title>
    <link rel="icon" type="image/png" href="fav.png">
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <header>
        <img src ="baner.png" alt="Mieszalnia farb">
    </header>
    <section class="formularz">
        <form action = "index.php" method = "post">
            <label for="data">Data odbioru od:</label>
            <input type="date" id="data" name="data" required><br><br>
            <label for="data">do:</label>
            <input type="date" id="data" name="data" required><br><br>
            <input type="submit" value="wyszukaj">
        </form>
        <?php
        $poloczenie = mysqli_connect("localhost", "root", "", "mieszalnia");
        if (!$poloczenie) {
            die("poloczenie nie udane: " . mysqli_connect_error());
        }   
        $zapytanie1 = "SELECT imie, Nazwisko, kod_koloru, pojemnosc, data_odbioru FROM `klienci` INNER JOIN zamowienia ON klienci.Id = zamowienia.id ORDER BY data_odbioru ASC;";
        $zapytanie2 = "SELECT Nazwisko, Imie, kod_koloru, pojemnosc, data_odbioru FROM `klienci` INNER JOIN zamowienia ON klienci.Id = zamowienia.id_klienta WHERE data_odbioru > '2021-11-05' and data_odbioru < '2021-11-07' GROUP by data_odbioru ASC;";
        
    </section>
    <section class ="glowny">
        <table>
            <tr>
                <th>Nr zamówienia</th>
                    <br>
                <th>Nazwisko</th>
                <th>Imie</th>    
                <th>Kolor</th>  
                <th>Pojemność</th>
                <th>Data odbioru</th>
                </tr>
        </table>
    </section>
    <footer>
        <h3>Egzamin INF.03"</h3>
        <p>Autor: Darkaa</p>
    </footer>
</body>
</html>