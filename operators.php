<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic operators</title>
</head>
<body>
    <?php

$zm = 10;
$zm2 = 20;
$imie = "Marek";
$nazwisko = "Sienkow";

echo "--------/ operator dodawania /--------<br/>"; 

echo $zm + $zm2;

echo "<br/>--------/ operator odejmowania /--------<br/>";

echo $zm2 - $zm;

echo "<br/>--------/ operator mnożenia /--------<br/>";

   echo $zm2 * $zm;

echo "<br/>--------/ operator dzielenia /--------<br/>";

echo $zm2 / $zm;

echo "<br/>--------/ operator reszty /--------<br/>";

echo 4 % 5;

echo "<br/>--------/ operator łączenia stringów /--------<br/>";

echo "Marek"." "."Sienko";
echo "<br/>";
echo $imie." ".$nazwisko;
   
   
   ?>

</body>
</html>