<?php
include_once ('Colorable.php');

class Square implements Colorable
{
    public $width;
    public function __construct($width)
    {
        $this->width = $width;
    }
    function caculateArea(){
        return pow($this->width,2);
    }
    function howToColor()
    {
        echo "Color all four sides!";
    }
}