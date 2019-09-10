<?php

include_once ('Square.php');

$square = new Square(8);
echo "Area: ". $square->caculateArea();
echo "<br>";
$square->howToColor();
