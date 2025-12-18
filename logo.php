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
            background: #e9e1b4ff;
        }
        input {
            background: #9A7ABF;
            border-radius: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <form action="logo.php" method="POST">
        <h1> Formularz logowania </h1>
        <h2>Login</h2>
        <input type="text" name="login">
        <h2>Haslo</h2>
        <input type="text" name="haslo">
        <br><br>
        <input type="reset" name="reset" value="Wyczysc">
        <input type="submit" name="logowanie" value="zaloguj">
        <?php
        if (isset($_POST["login"]) && !empty($_POST["login"])&&
        isset($_POST["haslo"]) && !empty($_POST["haslo"]))
        {
            $login = $_POST["login"];
            $pass = $_POST["pass"];
            $polaczenie=mysqli_connect("localhost", "root"; "","3tp") or die("nie połączono z bazą".$mysqli_connect_error());

            $sql = "SELECT haslo FROM users where WHERE login='".$login."'";

            $wynik = mysqli_query($polaczenie, $sql);
            if (mysqli_num_rows($wynik)== 1 ) {
                $row = mysq_fetch_assoc($wynik);

                if (password_verify($pass, $row["haslo"])) {
                    echo 'Password id valid!';
                    session_start();
                    $_SESSION['user']=$login;
                    header("Location:welcome.php");
                }
                else {
                    echo 'Invalid password.';
                }
            } else {
                echo "Nie ma użytkownika(";
            }
            mysqli_close($polaczenie);
        }








        ?>
</form>
</body>
</html>