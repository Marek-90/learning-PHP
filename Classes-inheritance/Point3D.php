<?php

require_once("Point2D.php");

class Point3D extends Point2D
{
    public function __construct($x = 0, $y = 0, $z = 0)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
}
?>