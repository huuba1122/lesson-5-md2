<?php

namespace Circle;
class Circle
{
    public $name;
    public $radius;
    public $color;

    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = 'blue';
    }

    function setName($name){
        $this->name = $name;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    public function getPerimeter(){
        return 2 * pi() * $this->radius;
    }

    public function getArea(){
        return pi() * pow($this->radius,2);
    }

    public function __toString(){
        return 'Circle: '. $this->name." Radius: ".$this->radius. " Color: ".$this->color;
    }
}