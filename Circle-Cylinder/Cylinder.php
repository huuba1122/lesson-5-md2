<?php
namespace Cylinder;
use Circle\Circle;

include_once "Circle.php";

class Cylinder extends Circle
{
    private $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function getArea()
    {
        return parent::getArea() + parent::getPerimeter()*$this->height;
    }

    public function getVolume(){
        return parent::getArea() *$this->height;
    }

    public function __toString()
    {
        return "Cylinder: " . $this->name . " Radius: ".$this->radius. " Height: ". $this->height. " Color: ".$this->color;
    }
}