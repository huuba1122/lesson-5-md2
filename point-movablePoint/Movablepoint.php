<?php
include_once "Point.php";

class MovablePoint extends Point
{
    public $_xSpeed;
    public $_ySpeed;

    public function MovablePoint($x, $y, $xSpeed, $ySpeed){
            parent::Point($x, $y);
            $this->_xSpeed = $xSpeed;
            $this->_ySpeed = $ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->_xSpeed = $xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->_ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->_ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->_xSpeed;
    }

    public function setSpeed($xSpeed, $ySpeed){
        $this->_xSpeed = $xSpeed;
        $this->_ySpeed = $ySpeed;
    }

    public function getSpeed(){
        return [$this->_xSpeed, $this->_ySpeed];
    }

    public function move(){
        $this->_x += $this->_xSpeed;
        $this->_y += $this->_ySpeed;
    }

    public function __toString()
    {
        return "MovablePoint co toa do X,Y " .$this->_x." ". $this->_y. " va speed theo chieu x, y : ". $this->_xSpeed. " " . $this->_ySpeed;
    }
}

$movePoint = new MovablePoint(100, 150, 10, 15);

print_r($movePoint->__toString());
echo "<br>";
$movePoint->move();
print_r($movePoint->__toString());
echo "<br>";
$movePoint->move();
print_r($movePoint->__toString());
echo "<br>";