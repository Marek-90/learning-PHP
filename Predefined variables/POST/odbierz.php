<!DOCTYPE html>

<?php
session_start(); // $_SESSION['nzawa'] = wartość;


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odbierz</title>
</head>

<body>
    <?php
    if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj')
    {
        $_SESSION['zalogowany'] = 0;
        session_destroy();
        echo "Zostałeś pomyślnie wylogowany<br/>";
    }
    if((isset($_POST['login']) && isset($_POST['hasło'])) || $_SESSION['zalogowany'] == 1)
    {
        if((!empty($_POST['login']) && !empty($_POST['hasło'])) || $_SESSION['zalogowany'] == 1)
        {
            if($_SESSION['zalogowany'] == 0)
          {
              $login =  filter_var($_POST['login'], FILTER_SANITIZE_STRING);
              $password = filter_var($_POST['hasło'], FILTER_SANITIZE_STRING);
        }

          if(($login == "Armon" && $password == "abc") || $_SESSION['zalogowany'] == 1)
          {
              if($_SESSION['zalogowany'] == 0)
              $_SESSION['login'] = $login;

              echo "Gratulacje zalogowałeś się na konto: ".$login."<br/>";
              echo "PANEL ADMINISTRACYJNY <br/>";
              echo "<a href='index.php'>Odśwież</a><br/>";
              echo "<a href='index.php?akcja=wyloguj'>Wyloguj się</a><br/>";
              
              $_SESSION['zalogowany'] = 1;

          }
          else
          echo "Nie podałeś loginu lub hasła. Spróbuj ponownie <a href='index.php'>tutaj</a>";
        }
        else
        echo "Nie podałeś loginu lub hasła. Spróbuj ponownie <a href='index.php'>tutaj</a>";

    }
    else
    echo "Nie został podany login lub hasło. Spróbuj ponownie <a href='index.php'>tutaj</a>";
?>
</body>

</html>