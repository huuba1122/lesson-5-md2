<?php


class Point2D
{
    public $_x;
    public $_y;

    public function Point2D($_x, $_y){
        $this->_x = $_x;
        $this->_y = $_y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->_x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->_y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->_x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->_y;
    }

    public function setXY($x, $y){
        $this->_x = $x;
        $this->_y = $y;
    }

    public function getXY(){
        return [$this->_x, $this->_y];
    }

    public function __toString(){
        return "Point2D co chieu dai: ". $this->_x. " va chieu rong: " . $this->_y ."<br>";
    }
}

//
//$point2d = new Point2D(10, 5);
//print_r($point2d->getXY());
//print_r($point2d->__toString());