<?php
interface Resizable {
    public function resizeWidth($value);
    public function resizeHeight($value);
}

class Rectangle implements Resizable {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resizeWidth($value) {
        $this->width += $value;
    }

    public function resizeHeight($value) {
        $this->height += $value;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}
$rectangle = new Rectangle(10, 5);
echo "Initial size: " . $rectangle->getWidth() . "x" . $rectangle->getHeight() . "<br>";

$rectangle->resizeWidth(2);
$rectangle->resizeHeight(-3);
echo "Size after change: " . $rectangle->getWidth() . "x" . $rectangle->getHeight() . "<br>";