<?php

include_once "Shape.php";
class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;
    public $color;

    public function Triangle(){
        $this->side1 = 1;
        $this->side2 = 1;
        $this->side3 = 1;
    }

    public function setABC($a, $b, $c){
        $this->side1 = $a;
        $this->side2 = $b;
        $this->side3 = $c;
    }

    public function getABC(){
        return [$this->side1, $this->side2, $this->side3];
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPerimeter(){
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea(){
        $s =  $this->getPerimeter()/2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function __toString()
    {
        return "Triangle has color: ". $this->color. " Perimeter: ".$this->getPerimeter(). " Area: ".$this->getArea();
    }
}


$triangle = new Triangle();
$triangle->setColor("blue");
echo $triangle->getPerimeter();
echo "<br>";
echo $triangle->getArea();
echo "<br>";
echo $triangle->__toString();