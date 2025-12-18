<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>$$$ PHP ćwiczenia $$$</title>
</head>
<body>
    <?php
    //zad1
    $txt1 = "PHP to język skryptowy wykonywany po stronie serwera";
   
    //zad3
    $a = "97 to liczba pierwsza";
    $b =  "Liczba PI to: 3.14";
    $c = "PHP to język skryptowy";
    //zad4
    $x = 10;
    $y = 7;
    //zad5
    $zmienna1 = 1;
    $zmienna2 = 2;
    $zmienna1 = $zmienna1 + $zmienna2;
    $zmienna2 = $zmienna1 -$zmienna2;
    $zmienna1 = $zmienna1 - $zmienna2;
    //zad6
    $c = 10;
    $d = 50;
    //zad7
    $x2 = 50;
    if ($x2 > 100){
    echo "<p>x2 jest wieksza od 100</p>";
    }
    else {
        echo "<p>x2 nie jest wiekszy od 100</p>";
    } 
    //zad8
    $k = 150;
    if (strlen($k) == 3 ){
    echo "<p>k jest trzycyfrowa liczbą</p>";
    }
    else {
        echo "<p>k nie jest 3-cyfrowa liczbą</p>";
    } 
    //zad9
    $l = 15000;
    if ($l < 0){
        echo "<p> L jest mniejsza od 0</p>";
    }
    elseif 
    ($l > 1000)  {
    echo "<p>L jest większa od 1000</p>";
    }

    //zad10
    $v = 15;
    echo ($v % 2 == 0) ? "parzysta" : "nieparzysta";

    //zad11
echo "<br>zad 11 <br>";
$wiek = 19;

switch (true) {
    case ($wiek < 18):
        echo "Jeszcze nie możesz głosować";
        break;
    case ($wiek >= 18 && $wiek < 21):
        echo "Możesz tylko głosować";
        break;
    case ($wiek >= 21 && $wiek < 30):
        echo "Możesz głosować i kandydować do sejmu!";
        break;
    case ($wiek >= 30 && $wiek < 35):
        echo "Możesz głosować i kandydować do sejmu i senatu";
        break;
    case ($wiek >= 35 && $wiek < 120):
        echo "Możesz głosować, kandydować do sejmu i senatu oraz na prezydenta";
        break;
    default:
        echo "Masz złą zmianę";
}


    echo '<h1>'. $txt1 . '</h1>';
    echo '<p>'. $a . '</p>';
    echo '<p>'. $b . '</p>';
    echo '<p>'. $c . '</p>';
    echo '<p>'. $x + $y. '</p>';
    echo '<p>'. $x - $y. '</p>';
    echo '<p>'. $x * $y . '</p>';
    echo '<p>'. $x / $y . '</p>';
    echo '<p>'. $x % $y. '</p>';
    echo '<p>'. $x ** $y .'</p>';
    echo "Przed zmiana: zmienna1 = $zmienna1, zmienna2 = $zmienna2\n";
    echo "Po zmianie:  zmienna1 = $zmienna1, zmienna2 = $zmienna2\n";
    echo "<p>Obwód: " .  ($c * 2) + ($d * 2). "</p>";
    echo "<p>pole: ".($c * $d) . "</p>";


  //12zadanko
  echo "<br> zadanko 12 <br>";
  $ile = 5;
  
  switch ($ile) {
    case 1:
        echo "wyświetl: +";
        break;
    case  2:
        echo "wyświetl: ++";
        break;
    case 3:
        echo "wyświetl: +++";
        break;
    case 4:
        echo "wyświetl: ++++";
        break;
    case 5:
        echo "wyświetl: +++++";
        break;
    case 6:
        echo "wyświetl: ++++++";
        break;
    case 7:
        echo "wyświetl: +++++++";
        break;
    case 8:
        echo "wyświetl: ++++++++";
        break;
    case 9:
        echo "wyświetl: +++++++++";
        break;
    case 10:
        echo "wyświetl: ++++++++++";
        break;   
    case ($ile < 1 && $ile > 9):    
    default:
    echo "wartość poza zakresem";             
  }


  echo "<br> <br><br>zadanko 13 <br>";
   $miesiąc = 13;
   switch ($miesiąc) {
    case 1:
    case 2:
    case 3:    
        echo "Kwartał I";
        break;
    case 4:
    case 5:
    case 6:        
        echo "Kwartał II";
        break;    
    case 7:
    case 8:
    case 9:        
        echo "Kwartał III";
        break;    
    case 10:
    case 11:
    case 12:        
        echo "Kwartał IV";
        break;    
    case ($miesiąc < 1 && $miesiąc > 12):    
        default:
        echo "Błędny numer miesiąca";
        break;
   }    
 
    echo "<br> <br><br>zadanko 14 <br>";

$f = 10;
$q = 20;
$m = 30;

if ($f > $q && $f > $m) {
    echo "f jest największą liczbą";
} elseif ($q > $f && $q > $m) {
    echo "q jest największą liczbą";
} else {
    echo "m jest największą liczbą";
}

echo "<br><br><br> zadanko 15 <br>";
for ($h = 5; $h < 16; $h++) {
  echo " $h <br>";
}

echo "<br><br><br> zadanko 16 <br>";
for ($z = 10; $z >= 0; $z -= 0.5) {
    echo " $z <br>";
}

echo "<br><br><br> zadanko 17 <br>";
$PHP = 0;
while($PHP < 11) 
{
  echo "$PHP = PHP";
  $PHP++;
} 

echo "<br><br><br> zadanko 18<br>";
$o = 1;
do // instrukcje do wykonania
{
  echo $o;
  $o++;
} 
while($o < 5);    

echo "<br><br><br> zadanko 19<br>";
$sum = 0;
// Pętla od 0 do 20 włącznie
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    $sum += $i; // dodaje tylko liczby nieparzyste zebym wiedziała
}
echo "Suma liczb nieparzystych z przedziału 0–20 wynosi: $sum";

echo "<br><br><br> zadanko 20<br>";
  $limit = 9;
// Pętla for od 0 do 9
for ($i = 0; $i < 10; $i++) {
    echo $i . " ";

    // Jeśli osiągniemy limit, przerywamy pętlę
    if ($i === $limit) {
        break; 
    }
}


echo "<br><br><br> zadanko z silną <br>";
$liczba = 10;
for ($i = 9; $i >= 1; $i-- ) {
  $liczba *= $i;
  echo " $liczba ";
}

  




echo "<br><br><br> choinko maaaa choinko maa zad 22<br><br>.";
for ($k=1; $k<11; $k++) {
    for($w=1; $w<=$k; $w++){
     echo  "*";
    }
echo "<br>";
}




echo "<br><br><br> choinko maaaa choinko maa zad 23<br><br>.";
for ($k=1; $k<11; $k++) {
    for($w=1; $w<=$k; $w++){
     echo  "*";
    }
echo "<br>";
}
for ($k=10; $k>0; $k--) {
    for($w=1; $w<=$k; $w++){
     echo  "*";
    }
echo "<br>";
}




echo "<br><br><br> TABLICZKA MNOŻENIA ZADANKO 24<br><br>.";





?>
</body>
</html>