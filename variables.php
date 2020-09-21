<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variablse</title>
</head>
<body>
    <?php
    $number = 4;
    $text = "Przykładowy tekst";
    $floatingPoint = 4.56222222222;

    echo $number;
    echo "<br/>-------------------------<br/>";

    // Funkcja wypisująca wartość - var_dump! 

    var_dump($number);
    echo "<br/>-------------------------<br/>";
    var_dump($text);
    echo "<br/>-------------------------<br/>";
    echo $text{1}; // <---- konkretny znak

    echo "<br/>-------------------------<br/>";

    echo "wysokość wynosi $number<br />"; // <--- interpretowane jako informacja
    echo 'wysokość wynosi $number<br />'; // <-- interpretowane jako znaki  
    echo "wysokość wynosi \$number"; // <-- "\" informuje o zinterpretowaniu jako znak  
    

    echo "<br/>-------------------------<br/>";

    var_dump($floatingPoint);
    echo "<br/>".(int)($floatingPoint)."<br/>"; //<--  integer
    echo round($floatingPoint, 1); //<--- zaokrągla(cyfra wskazuje miejsce po przecinku)


    echo "<br/>-------------------------<br/>";

    $messageSent = true;

    echo "$messageSent"; // <--- 1 = true ; 0 = false

    echo "<br/>-----------/ STAŁA ZMIENNA /--------------<br/>";

    define("GAME_NAME", "Gta");
    echo GAME_NAME


    ?>
    
</body>
</html>