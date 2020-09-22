<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <?php
    
    $num1 = 10;
    $num2 = 5;

    if($num1 > $num2)
        echo "a jest większe od b";
    else if($num1 < $num2)
        echo "b jest większe od a";
    else    
        echo ("a jest równe b");

        echo "<br/>-------------- // --------------<br/>";

// Za pomocą wąsów można wykonać dwie instrukcje podczas jednego warunku !!!!

    $num3 = 5;
    $num4 = 5;

    if($num3 > $num4)
        echo "num3 jest większe od num4";
    else if($num3 < $num4)
        echo "num4 jest większe od num3";
    else   
    { 
        echo ("num3 jest równe num4");
        echo "<br/>";
        echo ("wykonuje się dodatkowa instrukcja");
        echo "<br/>";
        if($num3 === $num4)
        echo "dodatkowo num3 jest tego samego typu co num4"; 
        
    }
    echo "<br/>-------------- // --------------<br/>";

    if(15 > 7 && 2 < 19)
        echo "prawda";


        echo "<br/>-------------- / Switch / --------------<br/>";

        $a = 50;

        switch($a)
        {
            case 0;
                echo "a jest równe 0";
                break;  
            case 25; 
                echo "a jest równe 25";
                break;
            case 50;
                echo "a jest równe 50";
                break;
            default;
                echo "a na pewno nie jest równe 0, 25, 50";
        }

        
    ?>
</body>
</html>