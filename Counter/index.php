<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File operations</title>
</head>

<body>
    <?php
    
    $nameFile = "test.txt";
    $indicator = @fopen($nameFile, "r+"); //fopepn - wskaźnik do pliku

    if($indicator)
    {
        $counter = (int)fread($indicator, filesize($nameFile));
        $counter++;

        rewind($indicator);
        fwrite($indicator, $counter);
    }

    echo "Nie ma takiego pliku";

    @fclose($indicator)

    ?>
</body>

</html>