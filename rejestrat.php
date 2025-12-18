<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
        form{
           text-align: center;
           background: #E1CFF5;
           margin-top: 50px;
           margin-bottom: 50px;
           margin-left: 500px;
           margin-right: 500px;
           border-radius: 15px;
           text-shadow: 3px, 3px;
           padding: 10px;
           font-size: 15px;
        }
        body {
            background: #B09EC4;
        }
        input {
            background: #9A7ABF;
            border-radius: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <form action="server.php" method="POST">
        <h1>Rejestracja</h1>
        <h3>Imie:</h3>
        <input type="text" name="imie" >
        <h3>nazwisko:</h3>
        <input type="text" name="nazwisko" >
        <h3>email:</h3>
        <input type="email" name="email" >
        <h3>login:</h3>
        <input type="text" name="login" >
        <h3>haslo:</h3>
        <input type="password" name="haslo" >
        <h3> powtórz haslo:</h3>
        <input type="password" name="haslo2" >
        <br><br>
        <input type="submit" name="zare" value="Zarejestruj">
        <br><br>
        <input type="reset" name="reset" value="reset" >
</form>
    <?php
        if(isset($_POST["imie"]) && !empty($_POST["imie"])&&
        isset($_POST["nazwisko"]) && !empty($_POST["nazwisko"])&&
        isset($_POST["email"]) && !empty($_POST["email"])&&
        isset($_POST["login"]) && !empty($_POST["login"])&&
        isset($_POST["haslo"]) && !empty($_POST["haslo"]))
        {
         if ($_POST["haslo"] != $_POST["haslo2"]) echo "<h2>Niezgodne hasła</h2>";
         else {
            $imie = $_POST["imie"];
            $nazw = $_POST["nazwisko"];
            $email = $_POST["email"];
            $login = $_POST["login"];
            $pass = $_POST["haslo"];
            $polaczenie=mysqli_connect("localhost", "root","","3tp") or die("nie połaczono".mysqli_connect_error());
            if ($polaczenie) echo "Połączono";
            $sql = "INSERT INTO users(imie,nazwisko, email, login, haslo) VALUES ('Weronika','Wicka','weronika.wicka1@wp.pl','meow','1345')";
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $zapytanie="INSERT INTO users VALUES (NULL,'".$imie."','".$nazw."','".$email."','".$login."','".$hash."')";
           
            $wynik = mysqli_query($polaczenie,$zapytanie);
           
                if ($wynik){
                    header("Location:logo.php");
                }else echo "blad".$mysqli_error($polaczenie);
               
            mysqli_close($polaczenie);
         }
        }
    ?>
</body>
</html>
