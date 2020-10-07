<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>

<body>
    <?php
    require_once("Point.php");
    require_once("Point2D.php");

    // $p = new Point(40);
    
    // echo $p->x."<br/>";
    
    $p2 = new Point2D(10, 50);
    $p2->setX(70);

    echo $p2->getX()."<br/>";
    echo $p2->getY()."<br/>";

    ?>
</body>

</html>