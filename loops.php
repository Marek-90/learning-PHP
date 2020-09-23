<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php

    for($i = 0; $i < 10; $i++)
    {
        echo $i."<br/>";
    }

    $j = 0;
    while ($j < 3)
    {
        echo $j."<br/>";
        $j++;
    }

    echo "\$i = ".$i."<br/>";
    echo "\$j = ".$j."<br/>";

    echo "<br/>------------//------------<br/>";

    $tab["imię"] = "Marek";
    $tab["nazwisko"] = "Sieńkowski";

    foreach ($tab as $key => $value)
    {
        echo $key.": ".$value."<br/>";
    }

    ?>
</body>
</html>