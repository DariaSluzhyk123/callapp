<?php
$conn = mysqli_connect("localhost", "root", "", "choroby");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wykaz chorób</title>
    <link rel="stylesheet" href="style.css">
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

                ?>
            </ol>
        </section>
        <section class="prawa">
            <h2>Objawy chorób</h2>
            <form action="" method="post">
            <input type="list">
            <?php
            ?>
            <input type="submit" name="sprawdź">
            <?php
            ?>

            </form>
        </section>
    </main>
    <footer>
        <p>Strone opracował/a: 0000000</p>
    </footer>

<?php
$conn->close();
?>
</body>
</html>