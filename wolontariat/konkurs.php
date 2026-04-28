<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <title>WOLONTARIAT SZKOLNY</title>
  <meta charset="utf-8">
  <html lang="PL-pl">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header><h1>KONKURS - WOLONTARIAT SZKOLNY</h1></header>
<section id="lewa">
<h3>Konkursowe nagrody</h3>
<button onclick="location.reload();">Losuj nowe nagrody</button>
 <table>
    <tr>
      <th>Nr</th>
      <th>Nazwa</th>
      <th>Opis</th>
      <th>Wartość</th>
    </tr>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'konkurs');
    $query = "SELECT nazwa, opis, cena FROM nagrody ORDER BY RAND() LIMIT 5";
    $result = mysqli_query($connect, $query);
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo"<tr>
                <td>$i</td>
                <td>{$row['nazwa']}</td>
                <td>{$row['opis']}</td>
                <td>{$row['cena']} PLN</td>
              </tr>";
        $i++;
    }
    mysqli_close($connect);
    ?>
</table>
</section>

<section id="prawa">
  <img src="puchar.png" alt="puchar.png">
  <h4>Polecane linki</h4>
  <ul>
    <li><a href="kw1.png">Kwerenda1</a></li>
    <li><a href="kw2.png">Kwerenda2</a></li>
    <li><a href="kw3.png">Kwerenda3</a></li>
    <li><a href="kw4.png">Kwerenda4</a></li>
</ul>
</section>








<footer>
  <p>Numer zdającego: xxxxxxxxx</p>
</footer>
</body>
</html>