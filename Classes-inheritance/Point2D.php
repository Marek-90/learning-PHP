<?php
require_once("Point.php");

class Point2D extends Point
{
   protected $y;
   private $p;
   public function __construct($x=0, $y=0)
   {
    parent::__construct($x);
    $this->y = $y;
   }
   public function getY()
   {
       return $this->y;
   }
   public function setY($y)
   {
           $this-> y = $y;       
   }
}

?>