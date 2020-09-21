<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $newArray[0] = 10; //<-- zdefiniowana tablica jednoelementowa, wartość 10
    echo $newArray[0];
    echo "<br/>";

    $tab[] = "text";
    $tab[] = 56;

    echo $tab[0]."<br/>";
    echo $tab[1]."<br/>";

    echo "<pre>";
    print_r($tab);
    echo "<pre>";

    echo "<br/>----------/ Tablica asocjacyjna - skojarzeniowa /---------<br/>";

    $czlowiek["imie"] = "Marek";
    $czlowiek["nazwisko"] = "Sienko";

    echo "<pre>";
    print_r($czlowiek);
    echo "<pre>";

    echo "<br/>----------/  drugi sposób tworzenia tablicy   /---------<br/>";

    $tab2 = array("imie" => "Marek", "nazwisko" => "Sienko", "wiek" => "29");

    echo "<pre>";
    print_r($tab2);
    echo "<pre>";

    echo "<br/>----------/ Tablica wielowymiarowa /---------<br/>";

    $czlowiek2[0]["imie"] = "Marek";
    $czlowiek2[0]["nazwisko"] = "Sienko";

    $czlowiek2[1]["imie"] = "Dobromir";
    $czlowiek2[1]["nazwisko"] = "Iksinski";

    $czlowiek3["imie"][0] = "Marek";
    $czlowiek3["nazwisko"][0] = "Sienko";

    $czlowiek3["imie"][1] = "Dobromir";
    $czlowiek3["nazwisko"][1] = "Iksinski";

    echo "<pre>";
    print_r($czlowiek2);
    echo "<pre>";

    echo "<pre>";
    print_r($czlowiek3);
    echo "<pre>";

    ?>
</body>
</html>