<?php
//Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(2);
$circleArea = $circle->calculateArea();
echo "Circle Area: " . $circleArea . "\n";

$rectangle = new Rectangle(10,5);
$rectangleArea = $rectangle->calculateArea();
echo "rectangle Area: " . $rectangleArea . "\n";
?>