<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odbierz</title>
</head>

<body>
    <?php
    if(isset($_POST['login']) && isset($_POST['hasło']))
    {
        if(!empty($_POST['login']) && !empty($_POST['hasło']))
        {
            filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        }
        else
        echo "Nie podałeś loginu lub hasła. Spróbuj ponownie <a href='index.php'>tutaj</a>";

    }
    else
    echo "Nie został podany login lub hasło. Spróbuj ponownie <a href='index.php'>tutaj</a>";
?>
</body>

</html>