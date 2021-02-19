<?php

include_once "Circle.php";
include_once "Cylinder.php";

use Circle\Circle;
use Cylinder\Cylinder;

$circle = new Circle('circle', 10);
$circle->setColor('yellow');
echo $circle->getArea();
echo "<br>";
echo $circle->__toString();

$cylinder = new Cylinder('Cylinder', 8, 5);
$cylinder->setColor('red');
echo "<br>";
echo $cylinder->getArea() . "<br>";
echo $cylinder->getVolume(). "<br>";
echo $cylinder->__toString();
