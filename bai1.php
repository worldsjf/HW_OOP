<?php
class Rectangle{
    protected $length;
    protected $width;
    public function __construct($length,$width)
    {
        $this->length=$length;
        $this->width=$width;
    }
    public function calArea()
    {
        return $this->length*$this->width;
    }
    public function calPerimeter()
    {
        return   ($this->length+$this->width)*2;  
    }
}
$length=13;
$width=3;
$rectangle= new Rectangle($length,$width);
echo"S:" .$rectangle->calArea() . "\n";
echo"CV".$rectangle->calPerimeter();
?>