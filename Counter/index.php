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
    $indicator = @fopen($nameFile, "r+"); 

    if($indicator)
    {
        $counter = (int)fread($indicator, filesize($nameFile));
        $counter++;

        rewind($indicator);
        fwrite($indicator, $counter);
    }
    else
        echo "Nie ma takiego pliku";

        
    @fclose($indicator)

    //fopepn - wskaźnik do pliku
    ?>
</body>

</html>