<?php
$conn = mysqli_conn("localhost", "root", "", "piekarnia");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img src="wypieki.jpg" alt="Produkty naszej piekarni">
    <nav>
    <a href="KWERENDA1">
        <a href="KWERENDA2">
            <a href="KWERENDA3">
                <a href="KWERENDA4">
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    <header>
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form method="POST">
            <select name="">
            <?php
                $zapytanie1 = ";";
                $wynik1 = mysqli_query($conn, $zapytanie1);
                    while($row = mysqli_fetch_row($wynik1)){
                        echo "<option>". $row['1'] ."</option>";
                    }
            ?>
            </select>
            <input type="submit" value="Wybierz">
            </form>
            <table>
                <tr>
                    <td>Rodzaj</td>
                </tr>
                <tr>
                    <td>Nazwa</td>
                </tr>
                <tr>
                    <td>Gramatura</td>
                </tr>
                <tr>
                    <td>Cena</td>
                </tr>
                
            </table>
    </main>
    <footer>
        <p>AUTOR: 0000</p>
        <p>Data</p>
    </footer>




</body>
</html>
<?php
$conn->close();
?>