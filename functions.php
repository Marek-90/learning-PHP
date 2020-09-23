<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php

    $textLength = strlen("test");
    echo $textLength;

    // echo strlen("test");

    echo "<br/> ---------//--------- <br/>";

    function nameFunctions()
    {
        echo "nazwa nr1<br/>";
        echo "nazwa nr2<br/>";
        echo "nazwa nr3<br/>";
        echo "nazwa nr4<br/>";
        echo "nazwa nr5<br/>";
        
    }

    nameFunctions();

    echo "<br/> ---------//--------- <br/>";

        function getHigherValue($a, $b= 0)
        {
            return ($a > $b ? $a : $b) +20;

        }
        echo getHigherValue(10, 20);

        echo "<br/> ---------//--------- <br/>";

        $var1 = 10;
        $var2 = 20;

        function changeValue(&$valueToChange, $value) // przesyłanie przez referencje poprzez "&"
        {
            $valueToChange = $value;
        }
        changeValue($var1, 50);

        echo $var1

    ?>
</body>
</html>