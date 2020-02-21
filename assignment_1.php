<?php
/**
 * Assignment-1.1
 */
$radious = 13;
const PI = 3.1416;
$area = ceil(PI*($radious ** 2));

echo "Area of a Circle: {$area}\n";

$circumference = ceil(2 * PI * $radious);

echo "Circumference of a circle: {$circumference}\n";

/**
 * Asignment-1.2
 */
$length = 10;
$width = 10;
$area = $length * $width;
echo "Area of a Rectangle: {$area}\n";

$perimeter = 2 * ($length + $width);

echo "Perimeter of a Rectangle: {$perimeter}\n";

/**
 * Assignment-1.3
 */

 for($i = 1; $i <= 6; $i++){
     echo "@@@@@@\n";
 }