<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    public $_z;

    public function Point3D($_x, $_y, $_z)
    {
        parent::__construct($_x, $_y);
        $this->_z = $_z;
    }

    public function setZ($_z){
        $this->_z = $_z;
    }

    public function getZ(){
        return $this->_z;
    }

    public function setXYZ($x, $y, $z)
    {
       parent::setXY($x, $y);
       $this->_z = $z;
    }

    public function getXYZ()
    {
        return [$this->_x, $this->_y, $this->_z];
    }

    public function __toString()
    {
        return "Point3D co chieu dai: " .$this->_x. " chieu rong: " . $this->_y. " chieu cao: " . $this->_z. "<br>";
    }
}


$point3d = new Point3D(5, 6, 7);

print_r($point3d->__toString());
$point3d->setXYZ(1,2,3);
print_r($point3d->getXYZ());
echo "<br>";
print_r($point3d->__toString());
