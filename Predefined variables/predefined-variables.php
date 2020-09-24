<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefined variables</title>
</head>
<body>
<div class="container">
    <div class="menu">
        <div><a href="?page=java">Java</a></div>
        <div><a href="?page=php">PHP</a></div>
        <div><a href="?page=mysql">MySql</a></div>
    </div>
    <div class="container">
    <?php
        echo "---------/ \$_GET /--------- <br/>";

        if(isset($_GET['page']))
        {

            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
            
            if(!empty($page))
            {
                if(is_file($page.".html"))
                    include($page.".html");
                else 
                 echo "Taka strona nie istnieje";
                
            }
        }
       

        echo "<br/>---------//---------<br/>";
    ?>
    </div>
</div>


 
</body>
</html>