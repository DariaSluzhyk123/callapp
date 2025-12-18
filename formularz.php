<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
<form action="formularz.php" method="post">
    Imię: <input type="text" name="imie"><br>
    Nazwisko: <input type="text" name="nazwisko"><br>
    Klasa:
    <select id="klasa" name="klasa">
        <option value="pierwsza">pierwsza</option>
        <option value="druga">druga</option>
        <option value="trzecia">trzecia</option>
    </select><br><br>
    <input type="submit" name="wyslij" value="Wyślij">
    <input type="reset" name="czysc" value="Wyczyść">
</form>

 <form action="formularz.php" method="post">
     <input type="submit" name="zobacz" value="zobacz">
</form>     


<?php
if (
    isset($_POST['imie'], $_POST['nazwisko'], $_POST['klasa']) &&
    !empty($_POST['imie']) &&
    !empty($_POST['nazwisko']) &&
    !empty($_POST['klasa'])
) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $klasa = $_POST['klasa'];

    $myfile = fopen("form.txt", "a") or die("Unable to open file!");
$txt = $imie. " ". $nazwisko;
fwrite($myfile, $txt);
$txt = "$klasa \n";
fwrite($myfile, $txt);
fclose($myfile);

    echo "<h1>Witaj $imie $nazwisko, jesteś uczniem klasy $klasa</h1>";
}else echo "<h2 style='color:blue'>Wypełnij wszystkie pola!</h2>";

if(isset($_POST['zobacz'])) {
    $myfile = fopen("form.txt", "r") or die("unable to open file!");
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
}

?>



</body>
</html>