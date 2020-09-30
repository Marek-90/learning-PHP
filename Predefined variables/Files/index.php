<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http="content-type" content="text/html">
    <title>Zmienna predefiniowana $_Files</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="30720" />
            <input type="file" name="plik" />
            <input type="submit" value="dodaj plik" />
        </div>

    </form>

    <?php
     if(isset($_FILES['plik']))
     {
        print_r($_FILES['plik']);
         switch($_FILES['plik']['error'])
         {
            case 0;
            if($_FILES['plik']['type'] == "image/jpg" || $_FILES['plik']['type']=="image/gif" || $_FILES['plik']['type']=="image/png")
            {
            move_uploaded_file($_FILES['plik']['tmp_name'], md5(rand()*rand()+rand()).$_FILES['plik']['name']);
                echo "plik został pomyślnie załadowany";
            } 
            else 
                echo "niedozowlone rozszerzenie pliku";
                break;
            case 1;
                echo "Za duży plik (php.ini)!";
                break;
            case 2;
                echo "Za duży plik!";
                break;
            case 3;
                echo "Niepełny plik!";
                break;
            case 4;
                echo "Nie wybrano pliku!";
                break;
            default:
                echo "Błąd którego nie przewidziano, prosimy o kontakt";


         }
     }
    ?>

</body>

</html>