<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
</head>
<body>
    
<form action="formularze.php" method ="post">
Imie: <input type="text" name="imie"><br>
E-mail:<input type="text" name="email"><br>
<input type="submit" name="submit">
</form>

<h1>Przelicznik walut:</h1>
<form action="formularze.php" method ="post">
<input type="number" name="zl" value="usd" value="euro">zl<br>
<input type="submit" name="submit"><br>
<input type="number" name="usd">usd<br>
<input type="number" name="euro">euro<br>
</form>


 <?php

if (isset($_POST['imie']) && isset($_POST['email']) && !empty($_POST['imie']) && !empty($_POST['email'])) {
echo 'witaj - sprawdzilem imie i email: <h2>'.$_POST['imie'].' '.$_POST['email']."<h2>";
}
else echo "wypełnij wszystkie pola";

if (isset($_POST['zl']) && !empty($_POST['zl'])){
    echo($_POST['zl'])*0.27 . 'usd' .'<br>';
    echo($_POST['zl'])*0.24 . 'euro'. '<br>';
}
else {
echo 'to jest twoja kwota: <br><h2>'.$_POST['usd'].' '.$_POST['euro']. ' '.$_POST['zl']."<h2>";
}
    








 ?>



</body>
</html>