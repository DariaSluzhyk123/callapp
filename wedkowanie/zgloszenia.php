<?php


    $pole1 = $_POST['Lowisko'];
    $pole2 = $_POST['Data'];
    $pole3 = $_POST['Sedzia'];

    
    $conn = mysqli_connect("localhost", "root", "", "wedkarstwo");
    $zapytanie = "INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES ('2', '$pole1', '$pole2', '$pole3')";

   // $baza =
    mysqli_query($conn, $zapytanie);
   // if ($baza) echo "Wstawiono do bazy" .mysqli_affected_rows( $conn )."rekordów";


mysqli_close($conn);
?>

