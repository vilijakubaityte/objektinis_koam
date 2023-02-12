<?php

require_once 'Point.php';

$p1 = new Point(2, 1);
$p2 = new Point(5,3);


echo $p1->__toString();
echo " = ";
echo $p1->distanceFromOrigin();
echo "<hr>";
echo $p1->__toString() . ", " . $p2->__toString();
echo " = ";
echo $p1->translate(5, 3);
echo $p1->__toString();
echo "<hr>";
echo $p1->distance($p2);
echo "<hr>";
echo $p1->setLocation(10,12);
echo $p1->__toString();






