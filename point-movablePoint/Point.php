<?php


class Point
{
    public $_x;
    public $_y;

    public function Point($x = 0, $y = 0){
        $this->_x = $x;
        $this->_y = $y;
    }

    /**
     * @param int|mixed $x
     */
    public function setX($x)
    {
        $this->_x = $x;
    }

    /**
     * @param int|mixed $y
     */
    public function setY($y)
    {
        $this->_y = $y;
    }

    /**
     * @return int|mixed
     */
    public function getX()
    {
        return $this->_x;
    }

    /**
     * @return int|mixed
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
        return "Point co toa do X: " . $this->_x. " toa do Y: ". $this->_y;
    }
}

//$point = new Point(100, 150);
//print_r($point->__toString());